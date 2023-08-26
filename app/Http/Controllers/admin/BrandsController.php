<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\BrandsDataTables;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BrandsDataTables $dataTable)
    {
        return $dataTable->render('admin.brands.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $amenity = new Brand();
        return view('admin.brands.create', compact('amenity'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation the data 
        $this->validate($request, [
            'icon' => 'required',
            'name' => 'required|string|max:255',
        ], [
            'name.en.required' => __('dashboard.name_en_required'),
            'name.en.string' => __('dashboard.name_en_invalid'),
            'name.en.max' => __('dashboard.name_en_too_long'),
            'name.ar.required' => __('dashboard.name_ar_required'),
            'name.ar.string' => __('dashboard.name_ar_invalid'),
            'name.ar.max' => __('dashboard.name_ar_too_long'),
        ]);


        $data = $request->except('image_remove');
        if ($request->icon) {
            $image_path = $request->file('icon')->store('uploads', 'public');
            $data['icon'] = $image_path;
        }

        //store in the database
        $amenity = Brand::create($data);

        //redirect to another page
        return redirect()->route('brands.index')->with('success', __('dashboard.added_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $amentity = Brand::findorfail($id);

        // return view('admin.brands.show', compact('amentity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $amenity = Brand::find($id);
        return view('admin.brands.edit', compact('amenity'));
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
        // $this->validate($request, [
        //     'name' => 'required|unique|string|max:255',
        // ], [
        //     'name.unique' => "Change the name",
        //     'name.en.string' => __('dashboard.name_en_invalid'),
        //     'name.en.max' => __('dashboard.name_en_too_long'),
        //     'name.ar.required' => __('dashboard.name_ar_required'),
        //     'name.ar.string' => __('dashboard.name_ar_invalid'),
        //     'name.ar.max' => __('dashboard.name_ar_too_long'),
        // ]);

        $data = $request->except('image_remove');
        if ($request->icon) {
            $image_path = $request->file('icon')->store('uploads', 'public');
            $data['icon'] = $image_path;
        }
        //store in the database
        $amenity = Brand::find($id);
        $amenity->update($data);

        //redirect to another page
        return redirect()->route('brands.index')->with('success', __('dashboard.updatesucc'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $amenity = Brand::find($id);
        $amenity->delete();
        return response()->json(['status' => 'success', 'message' =>  __('dashboard.deleted_success')]);
    }


    public function updateStatus(Request $request): \Illuminate\Http\JsonResponse
    {
        $id = $request->get('id');
        $info = Brand::find($id);
        return Controller::updateModelStatus($info);
    }
}
