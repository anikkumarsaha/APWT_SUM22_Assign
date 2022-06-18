<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\selfInfoController;
use App\Http\Controllers\projectList;

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

Route::get('/',[selfInfoController::class,'selfInfo'])->name('selfInfo');
Route::get('/projects',[projectList::class,'projectList'])->name('projectList');
