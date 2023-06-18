<?php

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
    return view('welcome');
});
Route::get('/header', function () {
    return view('frontend.layout.header');
});
Route::get('/footer', function () {
    return view('frontend.layout.footer');
});
Route::get('/index', function () {
    return view('frontend.index');
});
Route::get('/userlogin', function () {
    return view('frontend.login');
});
Route::get('/signup', function () {
    return view('frontend.signup');
});
Route::get('/men', function () {
    return view('frontend.men');
});
Route::get('/women', function () {
    return view('frontend.women');
});
Route::get('/product-detail', function () {
    return view('frontend.product-detail');
});

Route::get('/cart', function () {
    return view('frontend.cart');
});
Route::get('/checkout', function () {
    return view('frontend.checkout');
});

Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/order-complete', function () {
    return view('frontend.order-complete');
});
Route::get('/wishlist', function () {
    return view('frontend.add-to-wishlist');
});




//==========================================================admin panel =====================================================================


Route::get('/admin', function () {
    return view('backend.dashboard');
});

Route::get('/admin_header', function () {
    return view('backend.layout.header');
});
Route::get('/admin_footer', function () {
    return view('backend.layout.footer');
});
Route::get('/404_error', function () {
    return view('backend.404_error');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
});
Route::get('/login', function () {
    return view('backend.login');
});
Route::get('/profile', function () {
    return view('backend.profile');
});
Route::get('/manage_user', function () {
    return view('backend.manage_user');
});
Route::get('/manage_employee', function () {
    return view('backend.manage_employee');
});
Route::get('/add_emp', function () {
    return view('backend.add_emp');
});