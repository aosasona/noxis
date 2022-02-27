<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatsController;
use App\Http\Controllers\PublicDatas;
use App\Http\Controllers\VideoController;
use App\Http\Middleware\LoggedIn;
use Illuminate\Support\Facades\Cookie;


Route::get('/', [GeneralController::class, 'home'])->name('home'); //Home route

Route::get('/signin', [AccountController::class, 'signin'])->name('signin'); //Sign-in route

Route::get('/signup', [AccountController::class, 'signup'])->name('signup'); //Sign-in route

Route::get('/search', function () {
    return view('search.index');
}); //search page

Route::get('/search/result', [SearchController::class, 'result']);//search result

Route::post('/auth/signup', [AuthController::class, 'sendmail']); //signup authorization

Route::post('/auth/signin', [AuthController::class, 'signin']); //signin submission

Route::post('/signin-auth', [AuthController::class, 'signin_auth']); //signin authorization

Route::post('/chats/{username}', [ChatsController::class, 'deleteConvo']); //Delete conversations

Route::get('/online', [UsersController::class, 'updateStatus'])->middleware(LoggedIn::class); //ONLINE status and new message ping route

Route::get('/video/{creator}/{client}', [VideoController::class, 'index'])->middleware(LoggedIn::class); //video chat route

Route::get('/u/{shortLink}', [PublicDatas::class, 'index']); //short link route

Route::resource('users', UsersController::class); //Users route for different methods

Route::resource('chats', ChatsController::class)->middleware(LoggedIn::class)->name('index', 'chats'); //Users route for different methods

Route::get('/logout', function () {
    Cookie::queue(Cookie::forget('username'));
    return redirect()->to('/signin');
})->name('logout'); //Logout route

 ?>