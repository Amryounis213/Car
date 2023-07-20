<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::first(); // Auth User
        $mycars = Car::where('user_id', $user->id)->get();
        $car = Car::first();

        $favCarIds = $user->favorites->pluck('car_id');

        $favCars = Car::whereIn('id', $favCarIds)->get();

        // dd($favCars);
        return view('website.account', compact('favCars', 'user', 'mycars', 'car'));
    }

    public function getFavCars(){

        $user = User::first(); // Auth User

        $favCarIds = $user->favorites->pluck('car_id');

        $favCars = Car::whereIn('id', $favCarIds)->get();

        return response()->json($favCars);
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
        return 123;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $data = $request->all();

        $user = User::findorfail($id);
        $input = $user->update($data);
        // dd($input);
        return redirect()->back()->with('message', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
}
