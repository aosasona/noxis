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
Route::post('/chats/{username}', [ChatsController::class, 'deleteConvo']); //Delete conversation
Route::get('/online', [UsersController::class, 'updateStatus'])->middleware(LoggedIn::class);
Route::get('/video/{creator}/{client}', [VideoController::class, 'index'])->middleware(LoggedIn::class);
Route::get('/u/{shortLink}', [PublicDatas::class, 'index']);
Route::resource('users', UsersController::class); //Users route for different methods
Route::resource('chats', ChatsController::class)->middleware(LoggedIn::class)->name('index', 'chats'); //Users route for different methods
Route::get('/logout', function () {
    Cookie::queue(Cookie::forget('username'));
    return redirect()->to('/signin');
})->name('logout');



/*TEST ROUTE WITHOUT POSTMAN
Route::get('/test', function() {
    //Getting user data in view
     $currentUser = Cookie::get('username');
     $chats = Chatslist::where('user1', $currentUser)->orwhere('user2', $currentUser)->get();

     foreach ($chats as $ch) {
         echo $ch->user1;
     }

    

    //GETTING CONVERSATIONS IN CHATLIST
     $user = "realao";
     $currentUser = "syntax";
     $chats = Chats::where(function($query_a) use($user, $currentUser) {
                     $query_a->where('from', $user)
                             ->where('to', $currentUser);
                     })
                     ->orwhere(function($query_b) use($user, $currentUser) {
                         $query_b->where('to', $user)
                                 ->where('from', $currentUser);
                         })
                     ->get();
    dd($chats);
});
Route::get('/csrf', [TestController::class, 'index']);
Route::delete('/csrf/{username}/{currentUser}', [TestController::class, 'test']);*/

Route::get('/test', function () {
    // $meetingIdArray = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "1", "2", "3", "4", "5", "6", "7", "8", "9"];

    // $RandId = array_rand($meetingIdArray, 12);

    // $generatedMeetingId = $meetingIdArray[$RandId[0]].$meetingIdArray[$RandId[10]].$meetingIdArray[$RandId[2]].$meetingIdArray[$RandId[3]].$meetingIdArray[$RandId[4]].$meetingIdArray[$RandId[5]].$meetingIdArray[$RandId[6]].$meetingIdArray[$RandId[7]];

    // return $generatedMeetingId;
});
?>