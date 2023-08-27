<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WebsiteStatic;
use Illuminate\Http\Request;

class WebsiteStaticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $websitestatic = WebsiteStatic::first();
        if (!$websitestatic) {
            $websitestatic = new WebsiteStatic();
        }

        return view('admin.websitestatic.edit', compact('websitestatic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

        // return $request->all();
        $data = $request->except('image_remove');
        if ($request->logo) {
            $image_path = $request->file('logo')->store('uploads', 'public');
            $data['logo'] = $image_path;
        }
        if ($request->image) {
            $image_path = $request->file('image')->store('uploads', 'public');
            $data['image'] = $image_path;
        }

        $websitestatic = WebsiteStatic::first();
        if (!$websitestatic) {
            WebsiteStatic::create($data);
        } else {
            $websitestatic->update($data);
        }
        //store in the database

        return redirect()->route('websitestatic.index')->with('success', __('dashboard.updatesucc'));
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
