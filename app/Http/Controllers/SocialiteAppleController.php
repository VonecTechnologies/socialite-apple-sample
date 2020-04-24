<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;

class SocialiteAppleController extends Controller
{

    /**
     * Redirection to provider function
     *
     * @return \Illuminate\Http\RedirectResponse|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)
                        ->scopes(["name", "email"])
                        ->stateless()
                        ->redirect();
        //return Socialite::driver('apple')->stateless()->redirect();
    }

    /**
     * Handle the providers callback
     *
     * @return mixed
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)
                        ->stateless()
                        ->user();
        dd($user);
        return $user;
    }
}
