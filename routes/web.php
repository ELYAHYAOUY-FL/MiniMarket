<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
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
Route::get('/home',[StaticController::class , 'home']);
Route::get('/categories',[StaticController::class , 'categories']);
Route::get('/login',[StaticController::class , 'login']);
Route::get('/redirects',[StaticController::class , 'redirects']);
Route::get('/admin',[StaticController::class , 'admin']);

Route::get('/', function () {
    return view('main');
});
Auth::routes();
Route::group(['middleware' => ['auth','isAdmin']], function () {
    Route::get('/dashboard', function () {
      return view('admin');
    //    return "this is adimn";
    });
 });
Route::group(['middleware' => ['auth','isAdmin']], function () {
    Route::get('/dashboard', function () {
      return view('admin');
    //    return "this is adimn";
    });
 });

// Route::middeleware(['auth','isAdmin'])->group(function(){
//     Route::get('/dashboard', function () {
//        // return view('admin.dashboard');
//        return "this is adimn";
//      });
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
