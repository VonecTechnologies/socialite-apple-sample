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
    public function redirectToProvider()
    {
        return Socialite::with('apple')->redirect();
    }

    /**
     * Handle the providers callback
     *
     * @return mixed
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('apple')->user();
        return $user;
    }
}
