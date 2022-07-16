<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\accountsController;
use App\Http\Controllers\adminController;

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

Route::get('/',[accountsController::class,'publicLogin'])->name('public.login');
Route::post('/',[accountsController::class,'publicLoginSubmit'])->name('public.login.submit');
Route::get('/Logout',[accountsController::class,'publicLogout'])->name('public.logout');
Route::get('/Registration',[accountsController::class,'publicRegistration'])->name('public.registration');
Route::post('/Registration',[accountsController::class,'publicRegistrationSubmit'])->name('public.registration.submit');
Route::get('/ForgotPassword',[accountsController::class,'publicForgotPassword'])->name('public.forgotPassword');
Route::get('/Admin/Dashboard',[adminController::class,'adminDashboard'])->name('admin.dashboard')->middleware('adminLoginCheckMiddleware');
Route::get('/Admin/Profile',[adminController::class,'adminProfile'])->name('admin.profile')->middleware('adminLoginCheckMiddleware');
Route::get('/Admin/ChangePassword',[adminController::class,'adminChangePassword'])->name('admin.changePassword')->middleware('adminLoginCheckMiddleware');
Route::post('/Admin/ChangePassword',[adminController::class,'adminChangePasswordSubmit'])->name('admin.changePassword.submit')->middleware('adminLoginCheckMiddleware');
Route::get('/Admin/Dashboard',[adminController::class,'adminCheckCustomersMovies'])->name('admin.checkCustomersMovies')->middleware('adminLoginCheckMiddleware');
Route::get('/Admin/CustomerList',[adminController::class,'adminUserList'])->name('admin.userlist')->middleware('adminLoginCheckMiddleware');
Route::post('/Admin/CustomerList',[adminController::class,'adminSearchUsersSubmit'])->name('admin.searchUsers.submit')->middleware('adminLoginCheckMiddleware');;
Route::get('/Admin/CustomerList/{id}/details',[adminController::class,'adminChangeRole'])->name('admin.changeRole')->middleware('adminLoginCheckMiddleware');
Route::post('/Admin/CustomerList/{id}/details',[adminController::class,'adminChangeRoleSubmit'])->name('admin.changeRole.submit')->middleware('adminLoginCheckMiddleware');