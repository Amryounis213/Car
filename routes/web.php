<?php

use App\Http\Controllers\Website\FrontEndController;
use App\Models\Car;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('website.welcome');
    $RandomCars = Car::inRandomOrder()->take(4)->get();
    $car = Car::first();

    // return $car ;
    return view('website.car' , compact('car' , 'RandomCars'));
});



Route::post('add-to-favorite', [FrontEndController::class , 'addToFavourite'])->name('add.to.favorite');