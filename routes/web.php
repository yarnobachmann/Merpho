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
    return view('partials.home');
});

Route::get('/projecten', function () {
    return view('partials.projecten');
});

Route::get('/contact', function () {
    return view('partials.contact');
});

Route::get('/team', function () {
    return view('partials.team');
});

Route::get('/webdesign', function () {
    return view('partials.webdesign');
});
