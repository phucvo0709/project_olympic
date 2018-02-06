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

Auth::routes();

Route::get('/home', function(){
    return view('home');
})->name('home');


Route::group(['middleware' => 'auth'], function() {
    Route::get('/user/{email}', 'UserController@index');
    Route::get('/logout', function(){Auth::logout();return redirect('/login');});
});
Route::group(['prefix' => 'profile',  'middleware' => 'auth'], function() {
    Route::get('{slug}', 'ProfileController@index');
    Route::get('friends', 'ProfileController@friends' );
});
