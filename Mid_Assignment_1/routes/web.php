<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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

Route::get('/',[userController::class,'home'])->name('home');

Route::get('/user/create',[userController::class,'create'])->name('user.create');
Route::post('/user/create',[userController::class,'createSubmit'])->name('user.create.submit');

Route::get('/user/login',[userController::class,'login'])->name('user.login');
Route::post('/user/login',[userController::class,'loginSubmit'])->name('user.login.submit');

Route::get('/user/all',[userController::class,'list'])->name('user.list');
Route::get('/user/details/{id}/info',[userController::class,'details'])->name('user.details');