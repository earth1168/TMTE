<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\notificationform;
use App\Models\User;
use App\Http\Controllers\paymentcontroller;

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

//another ways to auth with middleware use with loginController.checkUserType2
// Route::middleware(['auth:sanctum', 'verified'])
// ->get('/dashboard', [loginController::class , 'checkUserType2'])
// ->name('dashboard');

Route :: get('/notification',[notificationform :: class, 'formnoti']) -> name('noti');

Route::post('/notilog',[notificationform:: class,'notilog']) -> name('sended');

// Route::get('/payment',[paymentcontroller :: class, 'customerpayment']);

// Route::post('/addpayment',[paymentcontroller :: class, 'addpay']) -> name('addpayment');

Route::get('/payment',[paymentcontroller :: class, 'customerpayment'])
->middleware('userMW')
->name('viewPayment');

Route::post('/addpayment',[paymentcontroller :: class, 'addpay']) 
->middleware('userMW')
->name('addpayment');

Route::get('/payment/package', [paymentcontroller::class, 'viewPackage'])
->middleware('userMW')
->name('viewPackage');

Route::get('/payment/addPackage', [paymentcontroller::class, 'createPaymentLog'])
->middleware('userMW')
->name('addPackage');

Route :: get('/member', function(){
    $users = user:: all();
    return view('Notification.member', compact('users'));
}) -> name('member');

//User role
Route::middleware(['userMW', 'auth:sanctum', 'verified'])->group(function(){
    Route::get('/dashboard', [loginController::class , 'checkUserType'])->name('dashboard');
    Route::get('/dashboard/profileView', [profileController::class, 'profileView'])->name('profileView');
    Route::post('/dashboard/createProfile', [profileController::class, 'createProfile'])->name('createProfile');
    Route::post('/dashboard/profileView', [profileController::class, 'dropProfile'])->name('dropProfile');
    Route::get('/dashboard/profileEdit', [profileController::class, 'toEditProfile'])->name('editProfile');
    Route::post('/dashboard/edit', [profileController::class, 'editProfile'])->name('edit');    
    Route::post('/user', [profileController::class, 'homeProfile'])->name('userPage');

});

Route::get('/admin', [adminController::class, 'index'])
->middleware('adminMW')
->name('adminPage');

Route::get('/serviceAdmin', [serviceAdminController::class, 'index'])
->middleware('serviceAdminMW')
->name('serviceAdminPage');

// Route::get('/user', [userController::class, 'index'])
// ->middleware('userMW')->name('userPage');

