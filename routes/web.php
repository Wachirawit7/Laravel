<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
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

// Route::get('/{name}', function ($name) {
//     return view('welcome',['name'=>$name])
// });

// Route::get('/about', function () {
//     return view('about');
// });

// route::view('contact','contact');

// Route::get('user/{user}',[UserController::class,'index']);

// Route::get('user',[UserController::class,'index']);
Route::get('user',[UserController::class,'index']);

Route::get('/',[LoginController::class,'index']);

// route::view('login', 'login');


Route::post('/',[LoginController::class,'loginSubmit'])->name('login.submit');