<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\postController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[loginController::class,'login']);
Route::get('/registration',[loginController::class,'registration']);
Route::post('/register-user',[loginController::class,'registerUser'])->name('register-user');
Route::post('login-user',[loginController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[loginController::class,'dashboard']);




Route::resource('posts', postController::class);