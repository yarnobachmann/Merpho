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


Route::get('/', 'Frontend\PagesController@home');

Route::get('/webdesign', 'Frontend\PagesController@webdesign');

Route::get('/fotografie', 'Frontend\PagesController@fotografie');

Route::get('/projecten', 'Frontend\PagesController@projecten');

Route::get('/projecten/{id}', 'Frontend\PagesController@projecten_view');

Route::get('/team', 'Frontend\PagesController@team');

Route::get('/contact', 'Frontend\PagesController@contact');

Route::post('/contact', 'Frontend\PagesController@getcontact');

Route::bind('id', function($value, $route)
{
    return App\Projecten::where('naam', $value)->firstOrFail();
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
