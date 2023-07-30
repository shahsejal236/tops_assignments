<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;

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
});
//-----------------------------------------Frontend Routes --------------------------------------------//

Route::get('/header', function () {
    return view('frontend.header');
});
Route::get('/index', function () {
    return view('frontend.index');
});
Route::get('/about', function () {
    return view('frontend.about');
});
//Route::get('/blog', function () {
   // return view('frontend.blog');
//});
Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/blog',[blogController::class,'blogdata']);

Route::get('/login',[userController::class,'login']);
Route::post('/loginauth',[userController::class,'loginauth']);
Route::get('/logout',[userController::class,'logout']);

Route::get('/signup',[userController::class,'signup']);
Route::post('/signup',[userController::class,'store']);

Route::get('/profile',[userController::class,'show']);
Route::post('/profile',[userController::class,'show']);

Route::get('/addblog',[blogController::class,'blog']);
Route::post('/signup',[blogController::class,'addblog']);


//--------------------------------------------=Admin Routes -------------------------------------------------------------//

Route::get('/dashboard', function () {
    return view('backend.index');
});


Route::get('/header', function () {
    return view('backend.layout.header');
});
//Route::get('/manage_blogs', function () {
   // return view('backend.manage_blogs');
//});


Route::get('/adminlogin',[adminController::class,'adminlogin']);
Route::post('/adminlogin',[adminController::class,'adminlogincheck']);

Route::get('/manage_blogs',[blogController::class,'alldata']);

Route::get('/add_blog', function () {
    return view('backend.add_blog');
});
Route::post('/add_blog',[blogController::class,'store']);


Route::get('/blogs', function () {
    return view('backend.blogs');
});