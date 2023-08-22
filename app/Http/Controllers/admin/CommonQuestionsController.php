<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CommonQuestionsDataTables;
use App\Http\Controllers\Controller;
use App\Models\CommonQuestion;
use Illuminate\Http\Request;

class CommonQuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CommonQuestionsDataTables $dataTable)
    {
        return $dataTable->render('admin.commonquestions.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $common = new CommonQuestion();
        return view('admin.commonquestions.create', compact('common'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request, [
            'title' => 'required|max:255',
            'desc' => 'required',
        ], [
            'title.required' => __('dashboard.title_required'),
            'title.string' => __('dashboard.title_invalid'),
            'title.max' => __('dashboard.title_too_long'),
            'desc.required' => __('dashboard.desc_required'),
            'desc.string' => __('dashboard.desc_invalid'),
            'desc.max' => __('dashboard.desc_too_long'),
        ]);


        $data = $request->except('image_remove');
        if ($request->icon) {
            $image_path = $request->file('icon')->store('uploads', 'public');
            $data['icon'] = $image_path;
        }

        // dd($request->all());

        //store in the database
        $common = CommonQuestion::create($data);


        // $revision->Payments()->attach($request->payments);

        //redirect to another page
        return redirect()->route('commonquestions.index')->with('success', __('dashboard.added_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Gate::authorize('podcast.view-any');
        $common = CommonQuestion::find($id);
        return view('admin.commonquestions.edit', compact('common'));
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
        //validation the data
        $this->validate($request, [
            'title' => 'required|max:255',
            'desc' => 'required',
        ], [
            'title.required' => __('dashboard.title_required'),
            'title.string' => __('dashboard.title_invalid'),
            'title.max' => __('dashboard.title_too_long'),
            'desc.required' => __('dashboard.desc_required'),
            'desc.string' => __('dashboard.desc_invalid'),
            'desc.max' => __('dashboard.desc_too_long'),
        ]);


        $data = $request->all();
        if ($request->icon) {
            $image_path = $request->file('icon')->store('uploads', 'public');
            $data['icon'] = $image_path;
        }
        //store in the database
        $cartype = CommonQuestion::find($id);
        $cartype->update($data);

        //redirect to another page
        return redirect()->route('commonquestions.index')->with('success', __('dashboard.edit_success'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $revisiontype = CommonQuestion::find($id);

        $revisiontype->delete();
        return response()->json(['status' => 'success', 'message' =>  __('dashboard.deleted_success')]);
    }

    public function updateStatus(Request $request): \Illuminate\Http\JsonResponse
    {
        $id = $request->get('id');
        $info = CommonQuestion::find($id);
        return updateModelStatus($info);
    }
}
