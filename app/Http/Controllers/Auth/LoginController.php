<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Profile;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/timeline';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $userFB = Socialite::driver('facebook')->fields([
            'first_name', 'last_name', 'email', 'gender', 'birthday'
        ])->user();


        $email = $userFB['id'];

        $existUser = User::where('email', $email)->first();

        if($existUser){
            Auth::login($existUser);
            return redirect('/timeline');
        }else{
            $name = $userFB['first_name'] . ' ' . $userFB['last_name'];
            $email = $userFB['id'];
            ($genderFB = $userFB->user['gender']) ? ($gender = 1) : ($gender = 0);
            $avatar = $userFB->avatar_original;
            $birthDay = $userFB['birthday'];

            $user = new User;
            $user->name = $name;
            $user->email = $email;
            $user->password = bcrypt('olympic');
            $user->gender = $gender;
            $user->avatar = $avatar;
            $user->save();

            $profile = new Profile;
            $profile->user_id = $user->id;
            $profile->birthDay = $birthDay;
            $profile->save();

            Auth::login($user);
            return redirect('/timeline');
        }
    }
}
