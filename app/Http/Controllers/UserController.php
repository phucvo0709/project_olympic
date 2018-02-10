<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index($email){
        $user = User::where('email', $email)->get(['slug']);
        return response()->json([$user]);
    }
    public function getAuth(){
        $id = Auth::user()->id;
        return response()->json($id);
    }
    public function getUser($search){
        $user = User::where('name','LIKE',"%{$search}%")->get();
        if(count($user) > 0){
            return response()->json($user);
        }else{
            return response()->json(false);
        }
    }
}
