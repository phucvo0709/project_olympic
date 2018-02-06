<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index($email){
        $user = User::where('email', $email)->get(['slug']);
        return response()->json([$user]);
    }
}
