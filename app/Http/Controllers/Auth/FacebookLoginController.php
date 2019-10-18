<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Exception;
use Auth;
use Socialite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FacebookLoginController extends Controller
{
    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }


    /**
     * Obtain the user information from Facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
        //dd($user);

        $user = User::updateOrCreate(
            [
                'email' => $user->email,
                'token' => $user->token,
                'name'  =>  $user->name,
                'avatar' => $user->avatar
            ]
        );
     
        Auth::login($user, true);
        return redirect()->to('/');
    }
}
