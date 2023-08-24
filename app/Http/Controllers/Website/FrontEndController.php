<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CommonQuestion;
use App\Models\Favorite;
use App\Models\WhoUs;
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
        $fav = Favorite::where('user_id', auth()->user()->id)->where('car_id', $request->car_id)->first();
        if ($fav) {
            Favorite::where('user_id', auth()->user()->id)->where('car_id', $request->car_id)->delete();
            return response()->json([
                'message' => 'Removed from favourite successfully',
            ]);
        }
        Favorite::create([
            'user_id' => auth()->user()->id,
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


    public function helpCenter()
    {
       $questions = CommonQuestion::all();
       return view('website.commonquestions', compact('questions'));
    }


    //Search by car model or brand or year
    public function search(Request $request)
    {
       
        $cars = Car::when($request->search , function($q) use($request){
            $q->whereHas('model', function ($qe) use ($request) {
                $qe->where('name', 'like', '%' . $request->search . '%');
            })
            ->orWhereHas('brand', function ($qe) use ($request) {
                $qe->where('name', 'like', '%' . $request->search . '%');
            });
        })
        ->when($request->year , function($q) use($request){
            $q->where('year', 'like', '%' . $request->year . '%');
        })
        //get price less than or equal to the amount
        ->when($request->amount , function($q) use($request){
            $q->where('price', '<=', $request->amount);
        })
        //seats number , models , brands , colors in , color out , year , price
        ->when($request->seats , function($q) use($request){
            $q->where('seats', 'like', '%' . $request->seats . '%');
        })
        ->when($request->colorin , function($q) use($request){
            $q->whereHas('colorIn' , function($qe) use($request){
                $qe->where('id' , $request->colorin);
            });
        })
        ->when($request->colorout , function($q) use($request){
            $q->whereHas('colorOut' , function($qe) use($request){
                $qe->where('id' , $request->colorout);
            });
        })
        ->when($request->models , function($q) use($request){
            $q->whereHas('model', function ($qe) use ($request) {
                $qe->where('name', 'like', '%' . $request->models . '%');
            });
        })
        ->when($request->brands , function($q) use($request){
            $q->whereHas('brand', function ($qe) use ($request) {
                $qe->where('name', 'like', '%' . $request->brands . '%');
            });
        })

        ->get();
        return view('website.cars', compact('cars'));
    }

    public function showCars()
    {
        $cars = Car::all();
        return view('website.cars', compact('cars'));
    }

    public function aboutUs()
    {
       $about = WhoUs::first();
       return view('website.about', compact('about'));
    }

    public function terms()
    {
       $terms = WhoUs::first();
       return view('website.terms', compact('terms'));
    }
}
