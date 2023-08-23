<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AmenitiesDataTables;
use App\Http\Controllers\Controller;
use App\Models\Amenity;
use Illuminate\Http\Request;

class AmenitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AmenitiesDataTables $dataTable)
    {
        return $dataTable->render('admin.amenities.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $amenity = new Amenity();
        return view('admin.amenities.create', compact('amenity'));
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
            'name.en' => 'required|string|max:255',
            'name.ar' => 'required|string|max:255',
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
        $amenity = Amenity::create($data);

        //redirect to another page
        return redirect()->route('amenities.index')->with('success', __('dashboard.added_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $amentity = Amenity::findorfail($id);

        return view('admin.amenities.show', compact('amentity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $amenity = Amenity::find($id);
        return view('admin.amenities.edit', compact('amenity'));
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
            'name.en' => 'required|string|max:255',
            'name.ar' => 'required|string|max:255',
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
        $amenity = Amenity::find($id);
        $amenity->update($data);

        //redirect to another page
        return redirect()->route('amenities.index')->with('success', __('dashboard.updatesucc'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $amenity = Amenity::find($id);

        $amenity->delete();
        return response()->json(['status' => 'success', 'message' =>  __('dashboard.deleted_success')]);
    }


    public function updateStatus(Request $request): \Illuminate\Http\JsonResponse
    {
        $id = $request->get('id');
        $info = Amenity::find($id);
        return Controller::updateModelStatus($info);
    }
}
