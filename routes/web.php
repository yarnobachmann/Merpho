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
    return view('pages.home');
});

Route::get('/projecten', function () {
    return view('pages.projecten');
});

Route::get('/projecten/{id}', function () {
    return view('pages.project-single');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/team', function () {
    return view('pages.team');
});

Route::get('/webdesign', function () {
    return view('pages.webdesign');
});

Route::get('/fotografie', function () {
    return view('pages.fotografie');
});
