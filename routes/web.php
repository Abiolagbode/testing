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
    // return 'Sleek\'s Tape';
});
Route::get('contact', function(){
    return 'Sleek Tap';
});
Route::get('about', function(){
    return 'about us';
});
Route::get('blog', function(){
    return 'blog';
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
