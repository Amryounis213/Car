<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WhoUs;
use Illuminate\Http\Request;

class WhoUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $whous = WhoUs::first();
        return view('admin.whous.edit', compact('whous'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @paramupper_text  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('image_remove');
      
        if ($request->image) {
            $image_path = $request->file('image')->store('uploads', 'public');
            $data['image'] = $image_path;
        }

        if ($request->icon) {
            $icon_path = $request->file('icon')->store('uploads', 'public');
            $data['icon'] = $icon_path;
        }
        $appconfig = WhoUs::first();

        //store in the database
        $appconfig->update($data);
        return redirect()->route('whous.index')->with('success', __('dashboard.data_updated_success'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->except('image_remove');
        if ($request->background_image) {
            $image_path = $request->file('background_image')->store('uploads', 'public');
            $data['background_image'] = $image_path;
        }
        if ($request->image) {
            $image_path = $request->file('image')->store('uploads', 'public');
            $data['image'] = $image_path;
        }
        $appconfig = WhoUs::first();

        //store in the database
        $appconfig->update($data);
        return redirect()->route('whous.index')->with('success', __('dashboard.data_updated_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
