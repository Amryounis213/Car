<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\PostDataTables;
use App\DataTables\TransactionsDataTables;
use App\DataTables\UsersDataTables;
use App\DataTables\UserTransactionsDataTables;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Role as ModelsRole;
use App\Models\RoleUser;
use App\Models\User;
use App\Models\Wallet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UsersDataTables $dataTable)
    {
        return $dataTable->render('admin.users.index');
    }

    public function GetUsers()
    {
        $users = User::select('id', 'name')->Active()->get();
        return response()->json($users);
    }



    public function GetUsersSelect2(Request $request)
    {
        $users = User::select('id', 'name')->Active()
            ->where('id', '!=', auth()->id())
            ->where('name', 'LIKE', '%' . $request->name . '%')
            ->get();
        return response()->json($users);
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        return view('admin.users.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data  = $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
                'password_confirmation' => 'required|same:password',
                'mobile' => 'required|unique:users',
                'telephone' => 'nullable',
                'address' => 'nullable',

                'role' => 'required',
                'enterprise' => 'nullable',
                'account_podcast' => 'required',
                'podcast_count' => Rule::requiredIf($request->account_podcast == 'limited'),
                'expire_date' => 'required',
            ],
            [
                'podcast_count.numeric' => 'يجب ان يكون عدد البودكاست رقم',
                'email.unique' => 'البريد الالكتروني موجود مسبقا',
                'mobile.unique' => 'رقم الجوال موجود مسبقا',
                'email.email' => 'البريد الالكتروني غير صحيح',
                'email.required' => 'البريد الالكتروني مطلوب',
                'name.required' => 'الاسم مطلوب',
                'mobile.required' => 'رقم الجوال مطلوب',
                'status.required' => 'حالة الحساب مطلوبة',
                'is_admin.required' => 'نوع الحساب مطلوب',
                'podcast_count.required' => 'عدد البودكاست مطلوب',
                'account_podcast.required' => 'نوع الحساب مطلوب',
                'expire_date.required' => 'تاريخ انتهاء الحساب مطلوب',
                'role.required' => 'الصلاحية مطلوبة',
            ]
        );
        // return $request->all();
        // try {
        $user = User::create($request->except('password_confirmation', 'role'));
        $role = ModelsRole::find($request->role);

        RoleUser::create([
            'role_id' => $role->id,
            'user_id' => $user->id,
        ]);
        // } catch (\Exception $e) {
        // dd($e->getMessage());
        // return redirect()->back()->with('errors', $e->getMessage());
        // }


        return redirect()->route('users.index')->with('success', 'تم اضافة مستخدم بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($userId)
    {
        $dataTable = new PostDataTables($userId);
        return $dataTable->render('admin.posts.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate data 

        $user = User::findOrFail($id);
        $user->post_attempts = $request->post_attempts + $user->post_attempts;

        $user->update($request->except('role'));

        return redirect()->route('users.index')->with('success', __('dashboard.updated_successfully'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        DB::table('cars')->where('user_id', $id)->delete();

        $user->delete();

        return response()->json(['status' => 'success', 'message' => __('dashboard.deleted_success')]);
    }






    // public function ChangePasswordView($id)
    // {
    //     $user = User::findOrFail(decrypt($id));
    //     return view('admin.users.change-password', compact('user'));
    // }   

    // public function updatePassword(Request $request, $id)
    // {

    //     //validate data 
    //     $data  = $request->validate([
    //         'password' => 'required|confirmed',
    //     ], [
    //         'password.required' => 'كلمة المرور مطلوبة',
    //         'password.confirmed' => 'كلمة المرور غير متطابقة',
    //     ]);
    //     $user = User::findOrFail($id);
    //     $user->update($data);
    //     return redirect()->back()->with('success', 'تم تعديل   كلمة المرور بنجاح');
    // }


    public function updateStatus(Request $request): \Illuminate\Http\JsonResponse
    {
        $id = $request->get('id');
        $info = User::find($id);
        return updateModelStatus($info);
    }
}
