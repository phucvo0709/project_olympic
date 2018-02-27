![construction image](https://i.imgur.com/FyNbRiE.png)

<p align="center">Project started in February 2018 and is under construction</p>

<strong>Installation guide:</strong>

1: git clone https://github.com/phucvo0709/project_olympic.git

2: npm install

3: composer install

4: Copy .env.example file to .env on root folder setting config.

5: php artisan key:generate

6: php artisan migrate

7: php artisan serve


Edit Code In File:
project_olympic\vendor\laravel\framework\src\Illuminate\Foundation\Auth\SendsPasswordResetEmails.php

    protected function sendResetLinkResponse($response)
    {
        return response()->json(['Send mail reset password success', true]);
    }
    
        protected function sendResetLinkFailedResponse(Request $request, $response)
    {
        return response()->json(['Email not found', false]);
    }
    
Edit Code In File:
project_olympic\vendor\laravel\framework\src\Illuminate\Auth\Passwords\CanResetPassword.php

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MailResetPasswordToken($token));
    }
    
Edit Code In File:
project_olympic\vendor\laravel\framework\src\Illuminate\Foundation\Auth\ResetsPasswords.php

    protected function resetPassword($user, $password)
    {
        $user->password = Hash::make($password);

        $user->setRememberToken(Str::random(60));

        $user->save();
    }
    
    protected function sendResetResponse($response)
    {
        return redirect('/login')->with('resetPasswordSuccess', 'Reset Password Success');
    }


Update:
- 11/2: 
  + Complete Laravel and vuejs: login, login with facebook, register, forgot password
  + Complete Laravel and vuejs: one-page router profile
- 12/2: 
  + Complete Laravel and vuejs: search and pagination
- 16/2:
  + Complete : Add Friend
