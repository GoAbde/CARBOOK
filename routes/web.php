<?php

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

Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/car', function () {
    return view('car');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/logine', function () {
    return view('admin.loginAdmin');
});

Route::get('/registers', function () {
    return view('admin.registerAdmin');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
