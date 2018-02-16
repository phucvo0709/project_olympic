<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function check(){
        if(Auth::check()){
            return redirect('/timeline');
        }else{
            return redirect('/login');
        }
    }
    public function forgot(){
        if(Auth::check()){
            return redirect('/timeline');
        }else{
            return view('index');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function getAuth(){
        $auth = Auth::user()->where('id', Auth::user()->id)->get();
        return response()->json($auth);
    }
    public function getUser($search){
        $user = User::where('name','LIKE',"%{$search}%")->get();
        if(count($user) > 0){
            return response()->json($user);
        }else{
            return response()->json(false);
        }
    }


    //fuction to
    public function pendingToList(){
        return Auth::user()->pendingToList();
    }

    public function getPendingTo($user_id){
        return Auth::user()->has_pending_friend_request_sent_to($user_id);
    }

    public function getPendingRequest(){
        return Auth::user()->pending_friend_requests_sent();
    }

    //fuction from
    public function getPendingFrom($user_id){
        return Auth::user()->has_pending_friend_request_sent_from($user_id);
    }


    //fuction action
    public function addFriend($user_requested_id){
        return Auth::user()->add_friend($user_requested_id);
    }
    public function acceptfriend($user_id){
        return Auth::user()->accept_friend($user_id);
    }

    public function cancelRequest($user_requested){
        return Auth::user()->cancel_request_add_friend($user_requested);
    }

    public function cancelRequestBar($user_id){
        return Auth::user()->cancel_request_bar($user_id);
    }

    public function checkFriend($user_id){
        return Auth::user()->check_friend($user_id);
    }

    public function allFriend(){
        return Auth::user()->friends();
    }
}
