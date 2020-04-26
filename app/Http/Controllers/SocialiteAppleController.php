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
        dd($user);
        return $user;
    }

    public function tokenCallback($provider)
    {
        $token = 'eyJraWQiOiJlWGF1bm1MIiwiYWxnIjoiUlMyNTYifQ.eyJpc3MiOiJodHRwczovL2FwcGxlaWQuYXBwbGUuY29tIiwiYXVkIjoiY29tLnZvbmVjLnNpd2EuYXBpIiwiZXhwIjoxNTg3OTI2MjAzLCJpYXQiOjE1ODc5MjU2MDMsInN1YiI6IjAwMTcxMC44NThkN2NhNWUwZDg0MWI5ODFiNGVkYWY2NWM0M2ZmNi4xOTMyIiwiYXRfaGFzaCI6IjRHZFprR0k2X2Q3Qk5xMFFJTkhKZEEiLCJlbWFpbCI6ImFoaWxtdXJ1Z2VzYW5AZ21haWwuY29tIiwiZW1haWxfdmVyaWZpZWQiOiJ0cnVlIiwiYXV0aF90aW1lIjoxNTg3OTI1NjAxLCJub25jZV9zdXBwb3J0ZWQiOnRydWV9.ciXdwwkySnG-Ne_l9NqxuLkDPyptUVvJ_Puk10LSsXNEtLBAijskQhIjwi3HYsEXNLdlbMGfJ25rnlMWu93RoqYJFo_u_rFjH_4Xt9E_ddnqY147yZvVw5k912FtXabQSl2bFiR7yrzuQvznxyAiYFP9v9HvXyTcYS2ki6ISdPjmTyb927yWyGDx-aigksV752toAA8XXmjjEyi01eY-wng4CaV4mxjJU_bQSpnh6zGLpmI-lxqBIfSbvW1ukMDh9VW7fIRq9l3yFba91TAT9oBv7QQVcEAU7jHNzKX3qU7JvCfr7d2UUXFVkOxYZFz1HuPHB5C9QuYn5TtFUb2ozw';
        dd(Socialite::driver($provider)->userFromToken($token));
        //$user;
    }
}
