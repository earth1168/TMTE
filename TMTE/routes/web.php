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

use App\Http\Controllers\mediaAdminController;
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

Route :: get('/notification',[notificationform :: class, 'formnoti']) -> name('noti');

Route::post('/notilog',[notificationform:: class,'notilog']) -> name('sended');

Route::get('/payment',[paymentcontroller :: class, 'customerpayment'])
->middleware('userMW')
->name('viewPayment');

Route::post('/addpayment',[paymentcontroller :: class, 'addpay']) 
->middleware('userMW')
->name('addpayment');

Route::post('/dropCreditCard', [paymentcontroller::class, 'deleteCreditCard'])
->middleware('userMW')
->name('dropCreditCard');

Route::get('/paymentEdit', [paymentcontroller::class, 'viewEditCreditCard'])
->middleware('userMW')
->name('toEditPayment');

Route::post('/paymentEdited', [paymentcontroller::class, 'editCreditCard'])
->middleware('userMW')
->name('editPayment');

Route::get('/payment/package', [paymentcontroller::class, 'viewPackage'])
->middleware('userMW')
->name('viewPackage');

Route::post('/payment/addPackage', [paymentcontroller::class, 'createPaymentLog'])
->middleware('userMW')
->name('addPackage');

Route :: get('/member', function(){
    $users = user:: all();
    return view('Notification.member', compact('users'));
}) -> name('member');

Route::get('/dashboard', [loginController::class , 'checkUserType2'])
->middleware(['auth:sanctum', 'verified'])
->name('dashboard');

Route::get('/serviceAdmin', [serviceAdminController::class, 'index'])
->middleware(['auth:sanctum', 'verified'])
->name('serviceAdminPage');

Route::get('/admin', [adminController::class, 'index'])
->middleware(['auth:sanctum', 'verified'])
->name('adminPage');


//User role
Route::middleware(['userMW'])->group(function(){
    Route::get('/dashboard/profileView', [profileController::class, 'profileView'])->name('profileView');
    Route::post('/dashboard/createProfile', [profileController::class, 'createProfile'])->name('createProfile');
    Route::post('/dashboard/profileView', [profileController::class, 'dropProfile'])->name('dropProfile');
    Route::get('/dashboard/profileEdit', [profileController::class, 'toEditProfile'])->name('editProfile');
    Route::post('/dashboard/edit', [profileController::class, 'editProfile'])->name('edit');    
    Route::post('/user', [profileController::class, 'homeProfile'])->name('userPage');
    Route::get('user/noti', [profileController::class, '']) -> name('userNoti');
});

Route::middleware(['adminMW']) -> group(function(){
    Route::post('/admin/addMedia', [adminController::class, 'addMedia']) -> name('adminAddMedia');
    Route::get('/admin/viewData', [adminController::class, 'viewData']) -> name('adminViewData');
});

 
Route::get('/mediaAd',[mediaAdminController:: class, 'index']);
Route::get('/mediaAd/mediaform',[mediaAdminController:: class, 'media']);
Route::get('/mediaAd/licenseform',[mediaAdminController:: class, 'license']);
