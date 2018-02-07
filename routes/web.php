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
    Route::post('/updateavatar', 'ProfileController@updateAvatar');
    Route::get('/apigetprofile/{slug}', 'ProfileController@apiGetProfile');
    Route::put('/updateprofile', 'ProfileController@updateProfile');
    Route::get('/timeline/{slug}', 'ProfileController@timeline');
    Route::get('/profile/{slug}/about', 'ProfileController@about');
    Route::get('/profile/{slug}/friends', 'ProfileController@friends');
    Route::get('/profile/{slug}/photos', 'ProfileController@photos');
    Route::get('/profile/{slug}/videos', 'ProfileController@videos');
    Route::get('/profile/{slug}/avatar', 'ProfileController@avatar');

    Route::get('/addfriend/{user_requested_id}', function($user_requested_id){
        return Auth::user()->add_friend($user_requested_id);
    });
    Route::get('/getauthid', function(){
        $id = Auth::user()->id;
        return response()->json($id);
    });

    Route::get('/getpendingids', function(){
        return Auth::user()->pending_friend_requests_sent_ids();
    });

    Route::get('/getpendingto/{user_id}', function($user_id){
        return Auth::user()->has_pending_friend_request_sent_to($user_id);
    });

    Route::delete('/cancelrequest/{user_requested}', function($user_requested){
        return Auth::user()->cancel_request_add_friend($user_requested);
    });

    Route::get('/getpendingrequest', function(){
        return Auth::user()->pending_friend_requests_sent();
    });

});
