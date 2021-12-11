<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

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
    return view('landing-page',[
        'title' => 'Welcome'
    ]);
});


/**
 * login route
 */
Route::get('/login-page', [LoginController::class, 'index'])->name('login');
Route::post('/login-page', [LoginController::class, 'authenticate']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


/**
 * registration
 * function for user admin register
 */
Route::get('/registration-page', [RegistrationController::class,'index']);
Route::post('/registration-page', [RegistrationController::class, 'save']);


Route::middleware(['auth'])->group(function () {

    //  route group dashboard
    Route::get('/dashboard-page', [DashboardController::class, 'index']);


    // route group member
    Route::get('/dashboard-page/member', [MemberController::class, 'index']);
    Route::get('/member/add', [MemberController::class, 'add']);

});