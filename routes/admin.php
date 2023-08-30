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
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProfileController as ControllersProfileController;
use App\Http\Controllers\SettingController;
use App\Models\Car;
use App\Models\User;
use Illuminate\Support\Facades\Route;
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



//Controller Panel
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('commonquestions', CommonQuestionsController::class);
Route::post('commonquestions/status', [CommonQuestionsController::class, 'updateStatus'])->name('commonquestions.status');
Route::resource('amenities', AmenitiesController::class);
Route::post('amenities/status', [AmenitiesController::class, 'updateStatus'])->name('amenities.status');
Route::resource('whous', WhoUsController::class);
Route::resource('terms', TermsController::class);
Route::resource('users', UserController::class);
Route::resource('posts', PostsController::class);
Route::get('cars', [CarsController::class, 'index'])->name('cars.index');
Route::post('posts/status', [PostsController::class, 'updateStatus'])->name('posts.status');
Route::get('setting', [SettingController::class, 'index'])->name('setting.index');
Route::post('setting', [SettingController::class, 'EditWebsiteData'])->name('setting.store');
Route::post('/posts/updatestatus', [PostsController::class, 'updatePostStatus'])->name('updatepoststatus');
Route::post('updateStatus', [PostsController::class, 'updateStatus'])->name('updateStatus');
Route::resource('contactus', ContactUsController::class);

Route::controller(WebsiteStaticsController::class)->group(function () {
    Route::get('/websitestatic', 'index')->name('websitestatic.index');
    Route::put('/websitestatic', 'update')->name('websitestatic.update');
});
// Route::post('product/status', [PostsController::class, 'updateCarStatus'])->name('product.status');







Route::middleware(['auth:admin'])->group(function () {
    //Controller Panel
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('commonquestions', CommonQuestionsController::class);
    Route::post('commonquestions/status', [CommonQuestionsController::class, 'updateStatus'])->name('commonquestions.status');

    Route::resource('amenities', AmenitiesController::class);
    Route::post('amenities/status', [AmenitiesController::class, 'updateStatus'])->name('amenities.status');

    Route::resource('brands', BrandsController::class);
    Route::post('brands/status', [BrandsController::class, 'updateStatus'])->name('brands.status');

    Route::resource('whous', WhoUsController::class);
    Route::resource('terms', TermsController::class);
    Route::resource('users', UserController::class);
    Route::resource('posts', PostsController::class);
    Route::get('cars', [CarsController::class, 'index'])->name('cars.index');
    Route::post('posts/status', [PostsController::class, 'updateStatus'])->name('posts.status');
    Route::get('setting', [SettingController::class, 'index'])->name('setting.index');
    Route::post('setting', [SettingController::class, 'EditWebsiteData'])->name('setting.store');
    // Route::post('product/status', [PostsController::class, 'updateCarStatus'])->name('product.status');

    Route::get('/profile', [ControllersProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ControllersProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ControllersProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


