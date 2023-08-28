<?php

use App\Http\Controllers\Admin\AmenitiesController;
use App\Http\Controllers\Admin\BrandsController;
use App\Http\Controllers\Admin\CarsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\UploadFilesController;
use App\Http\Controllers\Admin\CommonQuestionsController;
use App\Http\Controllers\Admin\TermsController;
use App\Http\Controllers\Admin\WebsiteStaticsController;
use App\Http\Controllers\Website\AuthController;
use App\Http\Controllers\Website\FrontEndController;
use App\Http\Controllers\Website\ProfileController;
use App\Http\Controllers\Admin\WhoUsController;
use App\Http\Controllers\ProfileController as ControllersProfileController;
use App\Http\Controllers\SettingController;
use App\Models\Car;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// routes/web.php
Route::get('contactus', [FrontEndController::class, 'contactus'])->name('contactus');
Route::post('contactus', [FrontEndController::class, 'storeContactus'])->name('contactus.store');

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    //Website
    Route::get('/', [FrontEndController::class, 'index'])->name('website.home');
    Route::get('/post', [ProfileController::class, 'createPost'])->name('post.create');
    Route::post('/post', [ProfileController::class, 'storePost'])->name('post.store');
    Route::resource('account', ProfileController::class);
    Route::post('add-to-favorite', [FrontEndController::class, 'addToFavourite'])->name('add.to.favorite');
    Route::get('getFavCars', [ProfileController::class, 'getFavCars'])->name('getFavCars');
    Route::get('/showcar/{id}', [FrontEndController::class, 'showCar'])->name('showCar');
    Route::get('/showcarbyimage/{id}', [FrontEndController::class, 'showCarByImage'])->name('showCarByImage');
    Route::get('/helpcenter', [FrontEndController::class, 'helpCenter'])->name('helpcenter');
    Route::get('/terms', [FrontEndController::class, 'terms'])->name('website.terms');
    Route::get('/aboutus', [FrontEndController::class, 'aboutUs'])->name('aboutus');
    Route::get('/showcars', [FrontEndController::class, 'showCars'])->name('cars');
    Route::post('search', [FrontEndController::class, 'search'])->name('search');


    //Login and Register Routes in Group Middleware
    Route::group(['middleware' => 'guest'], function () {
        Route::get('signin', [AuthController::class, 'Login'])->name('website.login');
        Route::get('signup', [AuthController::class, 'Register'])->name('website.register');
        Route::get('forgot', [AuthController::class, 'forgot'])->name('website.forgot');
        Route::get('forgot-password', [AuthController::class, 'ForgotPassword'])->name('website.forgot-password');
        Route::get('reset-password', [AuthController::class, 'ResetPassword'])->name('website.reset-password');
        Route::post('post-login', [AuthController::class, 'PostLogin'])->name('website.post.login');
        Route::post('post-register', [AuthController::class, 'PostRegister'])->name('website.post.register');
    });
});

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/

Route::prefix('admin')->group(function () {
    include __DIR__ . '/admin.php';
});


Route::prefix('admin')->name('admin.')->group(function () {
require __DIR__ . '/auth.php';
});