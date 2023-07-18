<?php

use App\Http\Controllers\Website\AuthController;
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
    // // return view('website.welcome');
    // $RandomCars = Car::inRandomOrder()->take(4)->get();
    // $car = Car::first();

    // return $car ;
    return view('website.signin');
});
Route::get('/account', function () {
    // return view('website.welcome');
    $user = User::first();
    $cars = Car::all();
    $mycars = Car::all();

    // return $car ;
    return view('website.account' , compact('user', 'cars', 'mycars'));
});



Route::post('add-to-favorite', [FrontEndController::class , 'addToFavourite'])->name('add.to.favorite');


//Login and Register Routes in Group Middleware
Route::group(['middleware' => 'guest'], function () {
    Route::get('login', [AuthController::class , 'Login'])->name('website.login');
    Route::get('register', [AuthController::class , 'Register'])->name('website.register');
    Route::get('forgot-password', [AuthController::class , 'ForgotPassword'])->name('website.forgot-password');
    Route::get('reset-password', [AuthController::class , 'ResetPassword'])->name('website.reset-password');
    Route::post('post-login', [AuthController::class , 'PostLogin'])->name('website.post.login');
    Route::post('post-register', [AuthController::class , 'PostRegister'])->name('website.post.register');
});




