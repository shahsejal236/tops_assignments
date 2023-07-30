<?php

use Illuminate\Routing\Controllers\Middleware;
use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\employeeController;

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
    return view('frontend.index');
});

//===========================================Admin Side ==============================================//



 //===login & logout===//
 Route::group(['middleware'=>['adminbeforelogin']],function(){
 Route::get('/adminlogin',[adminController::class,'login']);
 Route::post('/adminlogin',[adminController::class,'adminlogincheck']); // Login Check
 });


 Route::group(['middleware'=>['adminafterlogin']],function(){
 Route::get('/adminlogout',[adminController::class,'adminlogout']);//logout
 Route::get('/manage_user',[userController::class,'manage_user']);   
 Route::get('/manage_user/{id}',[userController::class,'destroy']);

Route::get('/index', function () {
    return view('backend.index');
});
Route::get('/header', function () {
    return view('backend.layout.header');
});
Route::get('/manage_employee', function () {
    return view('backend.manage_employee');
});

});

//============================================= frontend Routes ===================================================//

Route::group(['middleware'=>['userbeforelogin']],function(){
Route::get('/signup',[userController::class,'signup']);
Route::post('/signup',[userController::class,'store']);
Route::get('/login',[userController::class,'userlogin']);
Route::post('/login_check',[userController::class,'login_check']);
});
    
Route::group(['middleware'=>['userafterlogin']],function(){
Route::get('/logout',[userController::class,'logout']);
Route::get('/profile',[userController::class,'profile']);
Route::get('/profile/{id}',[userController::class,'edit']);
Route::post('/updateprofile/{id}',[userController::class,'update']);

});




Route::get('/userindex', function () {
    return view('frontend.index');
});

Route::get('/userheader', function () {
    return view('frontend.layout.header');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/about', function () {
    return view('frontend.about');
});



