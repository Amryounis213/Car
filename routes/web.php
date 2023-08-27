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
Route::get('/termsandconditions', [FrontEndController::class, 'terms'])->name('website.terms');
Route::get('/aboutus', [FrontEndController::class, 'aboutUs'])->name('aboutus');
Route::get('/showcars', [FrontEndController::class, 'showCars'])->name('cars');
Route::post('search', [FrontEndController::class, 'search'])->name('search');

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


Route::post('/upload', [ProfileController::class, 'upload']);
Route::delete('/revert1', [UploadFilesController::class, 'revert1'])->name('revertFile');



Route::get('test-color', function () {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'https://parseapi.back4app.com/classes/Color?limit=1000&keys=name,hexCode');
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'X-Parse-Application-Id: vei5uu7QWv5PsN3vS33pfc7MPeOPeZkrOcP24yNX', // This is the fake app's application id
        'X-Parse-Master-Key: aImLE6lX86EFpea2nDjq9123qJnG0hxke416U7Je' // This is the fake app's readonly master key
    ));
    $data = json_decode(curl_exec($curl)); // Here you have the data that you need
    print_r(json_encode($data, JSON_PRETTY_PRINT));
    curl_close($curl);
    //    dd($data);

})->name('test-color');


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //Controller Panel
    Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');
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
