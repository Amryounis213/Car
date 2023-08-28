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

        if ($info) {
            $post_status = $info->post_status;
            if ($post_status == 0) {
                $info->update(['post_status' => 1]);
            } else {
                $info->update(['post_status' => 0]);
            }
            return response()->json(['post_status' => 'success', 'message' => trans(__('dashboard.data_updated_success')), 'type' => 'no']);
        } else {
            return response()->json(['post_status' => 'error', 'message' => trans(__('dashboard.not_updated_success'))]);
        }
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
}
