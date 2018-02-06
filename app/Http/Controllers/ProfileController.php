<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function timeline(){
        return view('profile.index');
    }
    public function about(){
        return view('profile.index');
    }
    public function friends(){
        return view('profile.index');
    }
    public function photos(){
        return view('profile.index');
    }
    public function videos(){
        return view('profile.index');
    }
}
