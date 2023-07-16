<?php

use App\Http\Controllers\Website\FrontEndController;
use App\Models\Car;
use App\Models\User;
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
<<<<<<< HEAD
Route::get('/account', function () {
    // return view('website.welcome');
    $user = User::first();

    // return $car ;
    return view('website.account' , compact('user'));
});
=======



Route::post('add-to-favorite', [FrontEndController::class , 'addToFavourite'])->name('add.to.favorite');
>>>>>>> f84b0e34dcd8221c1decdf32f97110516c371d05
