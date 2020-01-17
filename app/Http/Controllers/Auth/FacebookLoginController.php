<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Auth;
use Socialite;
use Illuminate\Support\Str;
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

        $user = User::updateOrCreate(
            ['email' => $user->getEmail()],
            [
                'token' => $user->token,
                'name' => $user->getName(),
                'avatar_url' => $user->getAvatar(),
                'api_token' => Str::random(60),
            ]
        );

        Auth::login($user, true);

        return redirect()->to('/home');
    }
}
