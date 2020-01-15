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
Route::get('profile','UserController@profile');
Route::post('profile','UserController@profile_upload');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//adding routes
// Route::get('/index', function () {
//     return view('pages.index');
// });
Route::get('/about','PagesController@about');
Route::get('/index','PagesController@index');
Route::get('/services','PagesController@services');
Route::resource('post','PostsController');
Route::get('/message','MessagesController@create');
