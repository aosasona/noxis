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
use \App\Models\Chatslist;

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
Route::get('/', [GeneralController::class, 'home'])->name('home'); //Home route
Route::get('/signin', [AccountController::class, 'signin'])->name('signin'); //Sign-in route
Route::get('/signup', [AccountController::class, 'signup'])->name('signup'); //Sign-in route
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
Route::resource('chats', ChatsController::class)->middleware(LoggedIn::class)->name('index', 'chats'); //Users route for different methods
Route::get('/logout', function () {
    Cookie::queue(Cookie::forget('username'));
    return redirect()->to('/signin');
})->name('logout');


//TEST ROUTE WITHOUT POSTMAN
Route::get('/test', function() {
    $currentUser = Cookie::get('username');
    $chats = Chatslist::where('user1', $currentUser)->orwhere('user2', $currentUser)->get();

    foreach ($chats as $ch) {
        echo $ch->user1;
    }
});