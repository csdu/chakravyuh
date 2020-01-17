<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Auth;
use Socialite;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class GoogleLoginController extends Controller
{
    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $google_user = Socialite::driver('google')->user();

        $user = User::updateOrCreate(
            ['email' => $google_user->getEmail()],
            [
                'token' => $google_user->token,
                'name' => $google_user->getName(),
                'avatar_url' => $avatar = $google_user->getAvatar(),
                'api_token' => Str::random(60),
            ]
        );

        Auth::login($user, true);

        return redirect()->to('/home');
    }
}
