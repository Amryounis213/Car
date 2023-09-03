<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\PostDataTables;
use App\DataTables\TransactionsDataTables;
use App\DataTables\UsersDataTables;
use App\DataTables\UserTransactionsDataTables;
use App\Http\Controllers\Controller;
use App\Models\Amenity;
use App\Models\Brand;
use App\Models\Car;
use App\Models\CarModel;
use App\Models\CarType;
use App\Models\Color;
use App\Models\Generation;
use App\Models\Image;
use App\Models\Order;
use App\Models\Role as ModelsRole;
use App\Models\RoleUser;
use App\Models\User;
use App\Models\Wallet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
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
        return view('admin.createusers.create', compact('user'));
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
                'email' => 'required|email|unique:admins',
                'password' => 'required|min:6',
                'password_confirmation' => 'required|same:password',
            ],
            [
                'email.unique' => __('dashboard.email_unique'),
                'email.email' => __('dashboard.email_required'),
                'email.required' => __('dashboard.email_required'),
                'name.required' => __('dashboard.name_invalid'),
                'password_confirmation.same' => __('dashboard.password_must_confirm'),
            ]
        );


        $data = $request->except('password_confirmation', 'image_remove');

        $admin = User::create([
            'username' => $request->input('name'),
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'post_attempts' => 1,
            'created_by_admin' => 1,
        ]);


        return redirect()->route('createusers.index')->with('success', 'User Add Successfully');
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


    public function createPost()
    {
        $car = new Car();
        $models = CarModel::select('id', 'name')->get();
        $brands = Brand::select('id', 'name')->get();
        $carTypes = CarType::select('id', 'name')->get();
        $generation = Generation::select('id', 'name')->get();
        $carColors = Color::select('id', 'name')->get();
        $amenities = Amenity::get();
        $images = Car::inRandomOrder()->take(10)->get(['main_image', 'id']);
        // dd($images);
        $users = User::where('created_by_admin', 1)->get();
        return view('admin.users.createpost', compact('car', 'models', 'brands', 'carTypes', 'generation', 'carColors', 'amenities', 'images', 'users'));
    }


    public function storePost(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'car_model_id' => 'required|exists:car_models,id',
            'brand_id' => 'required|exists:brands,id',
            // 'car_type_id' => 'required|exists:car_types,id',
            'generation_id' => 'required|exists:generations,id',
            // 'user_id' => 'required|exists:users,id',
            'color_id_in' => 'nullable|exists:colors,id',
            'color_id_out' => 'nullable|exists:colors,id',
            // 'name' => 'required|unique:cars,name',
            'origin' => 'nullable',
            'min_km' => 'nullable|integer|min:0',
            'max_km' => 'nullable|integer|min:' . ($request->input('min_km') ?: 0),
            'year' => 'nullable|integer|min:1900|max:' . date('Y'),
            'mileage' => 'nullable|integer|min:0',
            'price' => 'required|numeric|min:0',
            'description' => 'required',
            'gearbox' => 'required|in:manual,automatic',
            // 'fuel' => 'required|in:Diesel,Essence,Electric',
            'number_of_doors' => 'nullable|integer|min:1',
            'number_of_places' => 'nullable|integer|min:1',
            'number_of_owners' => 'nullable|integer|min:0',
            'seats' => 'nullable|integer|min:1',
            'length' => 'nullable|integer|min:1',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images.*' => 'nullable',
            'techenical_control' => 'nullable|string',
            'first_hand' => 'nullable|boolean',
            'release_date' => 'nullable|date',
            'trunk_volume' => 'nullable|integer|min:0',
            'upholstery' => 'nullable|string',
        ], [
            'car_model_id.required' => 'The car model field is required.',
            'brand_id.required' => 'The brand field is required.',
            'car_type_id.required' => 'The car type field is required.',
            'generation_id.required' => 'The generation field is required.',
            'user_id.required' => 'The user field is required.',
            'name.required' => 'The name field is required.',
            'name.unique' => 'The name already exists.',
            'min_km.integer' => 'Minimum kilometer value must be an integer.',
            'max_km.integer' => 'Maximum kilometer value must be an integer.',
            'year.integer' => 'Year must be a valid year.',
            'mileage.integer' => 'Mileage must be an integer.',
            'price.numeric' => 'Price must be a number.',
            'gearbox.required' => 'The gearbox field is required.',
            'fuel.required' => 'The fuel field is required.',
            'images.*.image' => 'The images must be an image.',
            'images.*.mimes' => 'The images must be a file of type: jpeg, png, jpg, gif.',
            'images.*.max' => 'The images may not be greater than 2048 kilobytes.',
            // Add more custom error messages here for other fields
        ]);

        $user = User::find($request->user_id);
        if ($user->post_attempts <= 0) {
            return redirect()->back()->with('error', 'You have reached your maximum post limit. Please contact the administrator.');
        }

        // $this->Brand->name . ' - ' . $this->Model->name . ' - ' . $this->CarTypes->name . ' - ' . $this->Generations->name ;
        $name = $request->brand_id . ' - ' . $request->car_model_id . ' - ' . $request->car_type_id . ' - ' . $request->generation_id . uniqid('-');
        $car = Car::create([
            'car_model_id' => $request->car_model_id,
            'car_type_id' => $request->car_type_id,
            'generation_id' => $request->generation_id,
            'brand_id' => $request->brand_id,
            'year' => $request->year,
            'number_of_doors' => $request->number_of_doors,
            'number_of_owners' => $request->number_of_owners,
            'name' => $name,
            'description' => $request->description,
            'user_id' => $request->user_id,
            'price' => $request->price,
            'gearbox' => $request->gearbox,
            'fuel' => $request->fuel,
            'mileage' => $request->mileage,
            'seats' => $request->seats,
            'length' => $request->length,
        ]);

        if ($request->post_type == 0) {
            $car->post_type = 0;
            $car->save();
        }

        $user->post_attempts = $user->post_attempts - 1;
        $user->save();


        if ($request->images) {
            $carImages = [];
            foreach ($request->images as $key => $image) {
                $images = Image::where('folder', $image)->first();
                $carImages[$key] = $images->image;
            }
            $car->images = $carImages;
            $car->main_image = $carImages[0];
            $car->save();
        }
        return redirect()->back()->with('success', 'Car Added Successfully');
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
