<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($slug){
        $user = User::where('slug', $slug)->first();
        return view('profile.index')->with('user', $user);
    }
    public function friends(){
        return view('profile.friends');
    }
}
