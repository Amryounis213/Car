<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Car;
use App\Models\CarModel;
use App\Models\CarType;
use App\Models\Color;
use App\Models\Generation;
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

    public function getFavCars()
    {

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


    public function createPost()
    {
        $car = new Car();
        $models = CarModel::all();
        $brands = Brand::all();
        $carTypes = CarType::all();
        $generation = Generation::all();
        $carColors = Color::all();
        return view('website.addproduct', compact('car', 'models', 'brands', 'carTypes', 'generation', 'carColors'));
    }

    public function storePost(Request $request)
    {
        $data = $request->all();
        dd($data);
        $user = auth()->user()->post_attempts;
        $user->post_attempts = $user->post_attempts - 1;

        return redirect()->route('website.home');
    }

    public function contactus(Request $request)
    {
        //
    }

    public function contact(Request $request)
    {
        $data = $request->all();
        //store
        return redirect()->route('website.home');
    }
}
