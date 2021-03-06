<?php

namespace App\Http\Controllers;

use App\Friendship;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class ProfileController extends Controller
{
    public function index(){
        $userSlug = Auth::user()->slug;
        return redirect('/profile/'.$userSlug.'/about');
    }
    public function myTimeline(){
        $userSlug = Auth::user()->slug;
        return redirect('/timeline/'.$userSlug);
    }
    public function timeline($slug){
        $userSlug = Auth::user()->slug;
        if($userSlug == $slug){
            return view('profile.index');
        }else{
            return redirect('/timeline/'.$userSlug);
        }
    }
    public function about(){
        return view('profile.index');
    }
    public function friends($slug){
        $userSlug = Auth::user()->slug;
        if($userSlug == $slug){
            return view('profile.index');
        }else{
            return redirect('/profile/'.$userSlug.'/friends');
        }
    }
    public function photos(){
        return view('profile.index');
    }
    public function videos(){
        return view('profile.index');
    }
    public function avatar($slug){
        $userSlug = Auth::user()->slug;
        if($userSlug == $slug){
            return view('profile.index');
        }else{
            return redirect('/profile/'. $userSlug . '/avatar');
        }
    }
    public function apiGetProfile($slug){
        $user = Auth::user()->with('profile')->where('slug', $slug)->get();

        if(Auth::user()->slug == $slug){
            $check = true;
        }else{
            $check = false;
        }
        return response()->json([$user, $check]);
    }

    public function updateProfile(Request $request){
        Auth::user()->profile()->update($request->all());
    }

    public function updateAvatar(Request $request){
        $avatar = $request->get('avatar');

        $explode = explode(",", $avatar);

        if(str_contains($explode[0], 'gif')){
            $ext = 'gif';
        }else if(str_contains($explode[0], 'png')){
            $ext = 'png';
        }else{
            $ext = 'jpg';
        }

        $decode = base64_decode($explode[1]);

        $fileName = "/img/avatar/" . str_random() . "." . $ext;

        $path = public_path() . $fileName;

        file_put_contents($path, $decode);

        $fileBaseUser = Auth::user()->avatar;

        $fileImageDefault = "/img/avatar".Auth::user()->gender.".jpg";

        if(file_exists ($fileBaseUser)){
            if(strcmp($fileBaseUser,$fileImageDefault) != 0){
                unlink(public_path() . Auth::user()->avatar);
                Auth::user()->update(['avatar' => $fileName]);
            }else{
                Auth::user()->update(['avatar' => $fileName]);
            }
        }else{
            Auth::user()->update(['avatar' => $fileName]);
        }

        return response()->json('Update Success');
    }

}
