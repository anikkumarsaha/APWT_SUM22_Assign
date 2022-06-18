<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DepartmentController;
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

Route::get('/',[PagesController::class,'home'])->name('home');
Route::get('/about',[PagesController::class,'about'])->name('about');
Route::get('/student/all',[StudentController::class,'list'])->name('student.list');
Route::get('/student/details/{id}/info',[StudentController::class,'details'])->name('student.details');
Route::get('/student/create',[StudentController::class,'create'])->name('student.create');
Route::post('/student/create',[StudentController::class,'createSubmit'])->name('student.create.submit');


Route::get('/department',[DepartmentController::class,'create'])->name('dept.create');
Route::get('/ums/department/',[DepartmentController::class,'department'])->name('ums.dept.ind');
