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

Route::get('/', "HomeController@index");

Route::get('/registration',function (){
    return view('register');
})->name('registration');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/posts/{id}', "PostController@show");

Route::group(['prefix' => '/admin', 'middleware' => ['auth','role:admin']], function() {

});
