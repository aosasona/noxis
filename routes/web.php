<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', [GeneralController::class, 'home']); //Home route
Route::get('/signin', [AccountController::class, 'signin']); //Sign-in route
Route::get('/signup', [AccountController::class, 'signup']); //Sign-in route
Route::post('/signup/auth', [AccountController::class, 'signup_auth']); //sign-up post form
Route::post('/signin/auth', [AccountController::class, 'signin_auth']); //sign-up post form

Route::get('/auth/send-mail', function () {

  
    
    
    Mail::to('drealayodeji@icloud.com')->send(new \App\Mail\Auth);
   
    dd("Email is Sent.");
});