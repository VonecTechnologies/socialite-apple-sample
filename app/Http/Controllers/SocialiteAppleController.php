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
                        ->stateless()
                        ->redirect();
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
        //dd($user);
        return $user;
    }

    public function tokenCallback($provider)
    {
        $token = 'eyJraWQiOiJlWGF1bm1MIiwiYWxnIjoiUlMyNTYifQ.eyJpc3MiOiJodHRwczovL2FwcGxlaWQuYXBwbGUuY29tIiwiYXVkIjoiY29tLnZvbmVjLnNpd2EuYXBpIiwiZXhwIjoxNTg3OTExODU4LCJpYXQiOjE1ODc5MTEyNTgsInN1YiI6IjAwMTcxMC44NThkN2NhNWUwZDg0MWI5ODFiNGVkYWY2NWM0M2ZmNi4xOTMyIiwiYXRfaGFzaCI6IlJXcTlnSHRnN0Y4Y0V3VzFfQmNoM2ciLCJlbWFpbCI6ImFoaWxtdXJ1Z2VzYW5AZ21haWwuY29tIiwiZW1haWxfdmVyaWZpZWQiOiJ0cnVlIiwiYXV0aF90aW1lIjoxNTg3OTExMjU2LCJub25jZV9zdXBwb3J0ZWQiOnRydWV9.W2ivBc-x0mBMa-ExMz_RJOpR5Gx3muov8LygwcDiXgsMu1bm-fWfU1roCpiR2cJkGdaFvUp3101VXBJtBifeIYpjohcziyDzrKxCto9YgUjrgMFzCyKsXPjmZAF2FBg796_XEq4vabukL5ltK6qnM1LfTGDk7j7Ynveo09AmheOTyhwEkkRdCagluxtiRo7X6BhWijZoFZwxffLe4zq-zCwsNcqqqkbEJZnsh8Sp5SnphCajmRvEKrgB0ynBtoUorLj-QcpMs8o_Co7QUD7uVsXSSZc5XaDeIwStFC9ekaXPQOWyalzfd1loixzpBtBCoIalLJ02LKmdT5d0jvk52g';
        dd(Socialite::driver($provider)->userFromToken($token));
        //$user;
    }
}
