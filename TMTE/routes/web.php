<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\profileController;

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
->get('/dashboard', [loginController::class , 'checkUserType'])
->name('dashboard');

Route::get('/dashboard/profileView', [profileController::class, 'profileView'])
->middleware(['auth:sanctum', 'verified'])
->name('profileView');

Route::post('/dashboard/createProfile', [profileController::class, 'createProfile'])
->middleware(['auth:sanctum', 'verified'])
->name('createProfile');