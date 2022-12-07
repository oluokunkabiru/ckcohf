<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/contact-us', [PagesController::class, 'contact'])->name('contact');
Route::get('about/branch', [PagesController::class, 'branch'])->name('branch');
Route::get('about', [PagesController::class, 'about'])->name('about');
Route::get('loan/specia', [PagesController::class, 'specialloan'])->name('special-loan');
Route::get('loan/group', [PagesController::class, 'grouploan'])->name('grouploan');
Route::get('loan/asset', [PagesController::class, 'assetloan'])->name('assetloan');
Route::get('medical', [PagesController::class, 'medical'])->name('medical');
Route::get('scholarship', [PagesController::class, 'scholarship'])->name('scholarship');
Route::get('management', [PagesController::class, 'management'])->name('management');
Route::get('gallery', [PagesController::class, 'gallery'])->name('gallery');
Route::get('report', [PagesController::class, 'report'])->name('report');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
