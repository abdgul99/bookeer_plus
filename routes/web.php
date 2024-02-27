<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {

    // Routes for bookers
    Route::middleware(['booker'])->group(function () {
        // Define booker routes here
        Route::get('booker_profile', [ProfileController::class, 'bookerProfiler'])->name('booker_profile');
        Route::post('/updateImage', [ProfileController::class, 'updateImage'])->name('profile.updateImage');
        Route::post('/updateName', [ProfileController::class, 'updateName'])->name('profile.updateName');
        Route::post('/updateComment', [ProfileController::class, 'updateComment'])->name('profile.updateComment');
        Route::post('/updateAge', [ProfileController::class, 'updateAge'])->name('profile.updateAge');
        Route::post('/updateGender', [ProfileController::class, 'updateGender'])->name('profile.updateGender');
        Route::post('/updateJob', [ProfileController::class, 'updateJob'])->name('profile.updateJob');
        Route::post('/updateArea', [ProfileController::class, 'updateArea'])->name('profile.updateArea');
        Route::post('/updateWebsite', [ProfileController::class, 'updateWebsite'])->name('profile.updateWebsite');
        Route::post('/updateSns', [ProfileController::class, 'updateSns'])->name('profile.updateSns');
        Route::post('/updateGenre', [ProfileController::class, 'updateGenre'])->name('profile.updateGenre');
        Route::get('/favorite_unfavorite_publisher/{id}', [HomeController::class, 'favoriteUnfavoritePublisher'])->name('favorite_unfavorite_publisher');
        Route::get('faverout_publisher',[HomeController::class, 'faveroutPublisher'])->name('faverout_publisher');
    });


    // Routes for publishers
    Route::middleware(['publisher'])->group(function () {
        // Define publisher routes here
        Route::get('publisher_profile', [ProfileController::class, 'publisherProfile'])->name('publisher_profile');
    });


    // Routes for admins
    Route::middleware(['admin'])->group(function () {
        // Define admin routes here
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('booker_user', [DashboardController::class, 'bookerUsers'])->name('booker_user');
        Route::get('publisher_user', [DashboardController::class, 'publisherUsers'])->name('publisher_user');
        Route::post('/booker_user_status', [DashboardController::class, 'bookerUserStatus'])->name('booker_user_status');
        Route::post('/publisher_user_status', [DashboardController::class, 'publisherUserStatus'])->name('publisher_user_status');
        Route::get('add_publisher', [DashboardController::class, 'addPublisher'])->name('add_publisher');
        Route::post('new_publisher', [DashboardController::class, 'storePublisher'])->name('new_publisher');
        Route::get('account', function () {
            return view('dashboard.account');
        })->name('account');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});










Route::get('publisher_profile/{id}', [HomeController::class, 'publisherProfile'])->name('publisher_profile');





Route::get('search_result', function () {
    return view('containers.search_result');
})->name('search_result');

Route::get('about_company', function () {
    return view('containers.about_company');
})->name('about_company');

Route::get('privacy_policy', function () {
    return view('containers.privacy_policy');
})->name('privacy_policy');

Route::get('team_of_use', function () {
    return view('containers.team_of_use');
})->name('team_of_use');

Route::get('faq', function () {
    return view('containers.faq');
})->name('faq');

Route::get('search', function () {
    return view('containers.search');
})->name('search');



Route::get('message_list', function () {
    return view('containers.message_list');
})->name('message_list');


Route::get('publisher_search', function () {
    return view('containers.publisher.publisher_search');
})->name('publisher_search');



Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');