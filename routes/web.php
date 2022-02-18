<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatsController;
use App\Http\Middleware\LoggedIn;
use Illuminate\Support\Facades\Cookie;

use function PHPUnit\Framework\isTrue;

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
//Route::post('/signup/auth', [AccountController::class, 'signup_auth']); //sign-up post form
//Route::post('/signin/auth', [AccountController::class, 'signin_auth']); //sign-up post form
Route::get('/search', function () {
    return view('search.index');
});
Route::post('/auth/signup', [AuthController::class, 'sendmail']);
Route::post('/auth/signin', [AuthController::class, 'signin']);
Route::post('/signin-auth', [AuthController::class, 'signin_auth']);
Route::get('/search/result', [SearchController::class, 'result']);
Route::resource('users', UsersController::class); //Users route for different methods
Route::resource('chat', ChatsController::class)->middleware(LoggedIn::class); //Users route for different methods


//TEST ROUTE WITHOUT POSTMAN
Route::get('/test', function() {

    $sess = session()->get('username');

    return $sess;

});