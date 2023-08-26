<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\PostDataTables;
use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($userId)
    {
        $dataTable = new PostDataTables($userId);
        return $dataTable->render('admin.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $model = Car::findorfail($id);
        return view('admin.posts.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Car::findOrFail($id);

        $post->delete();

        return response()->json(['status' => 'success', 'message' => __('dashboard.deleted_success')]);
    }


    public function updateStatus(Request $request): \Illuminate\Http\JsonResponse
    {
        $id = $request->get('id');
        $info = Car::find($id);
        return Controller::updateModelStatus($info);
    }

    public function updatePostStatus(Request $request)
    {

        $id = $request->get('id');
        $status = $request->get('status');
        $info = Car::find($id);
        $info->status = $status;
        $info->save();

        return response()->json(['status' => 'success', 'message' => trans(__('dashboard.data_updated_success')), 'type' => 'no']);
    }

    // public function updateCarStatus(Request $request): \Illuminate\Http\JsonResponse
    // {
    //     // $id = $request->get('id');
    //     // $status = $request->get('status');
    //     // $info = Car::find($id);
    //     // // If the status is accepted, update the wallet balance
    //     // if ($info->car_status == 'pending') {
    //     //     $info->update(['car_status' => a]);

    //     //     $transaction = WalletTransaction::create([
    //     //         'wallet_id' => $wallet->id,
    //     //         'type' => 2, // deposit
    //     //         'amount' => $amount,
    //     //     ]);


    //     //     // Return a success response
    //     //     return response()->json([
    //     //         'status' => 'success',
    //     //         'message' => trans(__('dashboard.success')),
    //     //         'type' => 'yes',
    //     //     ]);
    //     // } else if ($info->status == 'rejected') {
    //     //     return response()->json([
    //     //         'status' => 'error',
    //     //         'message' => trans(__('dashboard.rejected')),
    //     //         'type' => 'yes',
    //     //     ]);
        // }
    // }
}
