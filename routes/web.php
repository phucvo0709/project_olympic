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
Route::group(['middleware' => 'auth'], function() {
    Route::get('/add', function(){
        return \App\User::find(1)->add_friend(2);
    });
    Route::get('/acc', function(){
        return \App\User::find(2)->accept_friend(1);
    });
    Route::get('/friends', function(){
        return \App\User::find(2)->friends();
    });
    Route::post('/updateavatar', 'ProfileController@updateAvatar');
    Route::get('/apigetprofile/{slug}', 'ProfileController@apiGetProfile');
    Route::put('/updateprofile', 'ProfileController@updateProfile');
    Route::get('/timeline/{slug}', 'ProfileController@timeline');
    Route::get('/profile/{slug}/about', 'ProfileController@about');
    Route::get('/profile/{slug}/friends', 'ProfileController@friends');
    Route::get('/profile/{slug}/photos', 'ProfileController@photos');
    Route::get('/profile/{slug}/videos', 'ProfileController@videos');
    Route::get('/profile/{slug}/avatar', 'ProfileController@avatar');
});

Route::get('/hello', function(){
    return Auth::user()->hello();
});