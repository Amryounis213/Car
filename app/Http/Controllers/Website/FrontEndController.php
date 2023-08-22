<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Favorite;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{

    public function index()
    {
        $cars = Car::all();
        return view('website.index', compact('cars'));
    }

    public function showCar($id)
    {
        $car = Car::findorfail($id);
        $RandomCars = Car::inRandomOrder()->take(10)->get();

        return view('website.car', compact('car', 'RandomCars'));
    }

    public function AddToFavourite(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
        ]);
        $fav = Favorite::where('user_id', 11)->where('car_id', $request->car_id)->first();
        if ($fav) {
            Favorite::where('user_id', 11)->where('car_id', $request->car_id)->delete();
            return response()->json([
                'message' => 'Removed from favourite successfully',
            ]);
        }
        Favorite::create([
            'user_id' => 11,
            'car_id' => $request->car_id,
        ]);
        return response()->json([
            'message' => 'Added to favourite successfully',
        ]);
    }

    public function RemoveFromFavourite(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
        ]);
        Favorite::where('user_id', 11)->where('car_id', $request->car_id)->delete();
        return response()->json([
            'message' => 'Removed from favourite successfully',
        ]);
    }

}
