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

Route::group(
    [
      'prefix' => LaravelLocalization::setLocale(),
      'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function()
  {
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
    Route::get('/terms', [FrontEndController::class, 'terms'])->name('terms');
    Route::get('/aboutus', [FrontEndController::class, 'aboutUs'])->name('aboutus');
    Route::get('/showcars', [FrontEndController::class, 'showCars'])->name('cars');
    Route::post('search', [FrontEndController::class, 'search'])->name('search');
    Route::post('change-password', [ProfileController::class, 'updatePassword'])->name('changepassword');

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






//Controller Panel
Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');
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
Route::put('/posts/updatestatus', [PostsController::class, 'updatePostStatus'])->name('updatepoststatus');

Route::controller(WebsiteStaticsController::class)->group(function () {
    Route::get('/websitestatic', 'index')->name('websitestatic.index');
    Route::put('/websitestatic', 'update')->name('websitestatic.update');
});
// Route::post('product/status', [PostsController::class, 'updateCarStatus'])->name('product.status');



Route::post('/upload', [ProfileController::class, 'upload']);
Route::delete('/revert1', [UploadFilesController::class, 'revert1'])->name('revertFile');

Route::prefix('admin')->group(function () {
    include __DIR__ . '/admin.php';
});


Route::prefix('admin')->name('admin.')->group(function () {
require __DIR__ . '/auth.php';
});