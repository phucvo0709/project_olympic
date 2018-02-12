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

Route::get('/', 'UserController@check');
Route::get('/login', 'LoginController@login');
Route::get('/forgot', 'UserController@forgot');

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/logout', 'UserController@logout');
});

Route::group(['prefix' => 'login'], function() {
    Route::get('facebook', 'Auth\LoginController@redirectToProvider');
    Route::get('facebook/callback', 'Auth\LoginController@handleProviderCallback');
});

Route::group(['prefix' => 'timeline', 'middleware' => 'auth'], function() {
    //using vuex routes
    Route::get('', 'ProfileController@myTimeline');
    Route::get('{slug}', 'ProfileController@timeline');
});

Route::group(['prefix' => 'profile', 'middleware' => 'auth'], function() {
    //using vuex routes
    Route::get('{slug}', 'ProfileController@index');
    Route::get('{slug}/about', 'ProfileController@about');
    Route::get('{slug}/friends', 'ProfileController@friends');
    Route::get('{slug}/photos', 'ProfileController@photos');
    Route::get('{slug}/videos', 'ProfileController@videos');
    Route::get('{slug}/avatar', 'ProfileController@avatar');
});

Route::group(['prefix' => 'api','middleware' => 'auth'], function() {

    //Get info auth
    Route::get('getauth', 'UserController@getAuth');

    //Get info User
    Route::get('getuser/{search}', 'UserController@getUser');

    //Profile
    Route::get('getprofile/{slug}', 'ProfileController@apiGetProfile');
    Route::post('updateavatar', 'ProfileController@updateAvatar');
    Route::put('updateprofile', 'ProfileController@updateProfile');

    //Button Add Friend
    Route::get('addfriend/{user_requested_id}', 'UserController@addFriend');
    Route::delete('cancelrequest/{user_requested}', 'UserController@cancelRequest');
    Route::get('getpendingto/{user_id}', 'UserController@getPendingTo');
    Route::get('getpendingrequest', 'UserController@getPendingRequest');

    Route::get('test', function(){
       return Auth::user()->pending_friend_requests_sent_ids();
    });
});

