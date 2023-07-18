<?php

use App\Http\Controllers\Website\FrontEndController;
use App\Http\Controllers\Website\ProfileController;
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
    return view('website.cars3' , compact('car' , 'RandomCars'));
});
// Route::get('/account', function () {
//     // return view('website.welcome');
//     $user = User::first();
//     $cars = Car::all();
//     $mycars = Car::all();

//     // return $car ;
//     return view('website.account' , compact('user', 'cars', 'mycars'));
// });

Route::resource('account', ProfileController::class);

Route::post('add-to-favorite', [FrontEndController::class , 'addToFavourite'])->name('add.to.favorite');
Route::get('getFavCars', [ProfileController::class , 'getFavCars'])->name('getFavCars');
