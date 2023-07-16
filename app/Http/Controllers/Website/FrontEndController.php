<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function AddToFavourite(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
        ]);
        Favorite::create([
            'user_id' => 1,
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
        Favorite::where('user_id', 1)->where('car_id', $request->car_id)->delete();
        return response()->json([
            'message' => 'Removed from favourite successfully',
        ]);
    }
}
