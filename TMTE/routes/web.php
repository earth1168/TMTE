<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\serviceAdminController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [loginController::class , 'checkUserType'])
// ->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])
->get('/dashboard', [loginController::class , 'checkUserType2'])
->name('dashboard');

//another ways to auth with middleware use with loginController.checkUserType2
// Route::middleware(['auth:sanctum', 'verified'])
// ->get('/dashboard', [loginController::class , 'checkUserType2'])
// ->name('dashboard');

Route::get('/dashboard/profileView', [profileController::class, 'profileView'])
->middleware(['auth:sanctum', 'verified'])
->name('profileView');

Route::post('/dashboard/createProfile', [profileController::class, 'createProfile'])
->middleware(['auth:sanctum', 'verified'])
->name('createProfile');

Route::get('/admin', [adminController::class, 'index'])
->middleware('adminMW')
->name('adminPage');

Route::get('/serviceAdmin', [serviceAdminController::class, 'index'])
->middleware('serviceAdminMW')
->name('serviceAdminPage');

Route::get('/user', [userController::class, 'index'])
->middleware('userMW')->name('userPage');

