<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/success',[App\Http\Controllers\UserController::class, 'store']);



Route::post('user',[UserController::class,'store']);

Route::post('login', [UserController::class,'index']);
Route::post('post-login', [UserController::class,'postLogin']); 
Route::get('register', [UserController::class,'register']);
Route::post('post-register', [UserController::class,'postRegister']); 
Route::post('dashboard', [UserController::class,'dashboard']); 
Route::post('logout', [UserController::class,'logout']);



