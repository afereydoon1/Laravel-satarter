<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;

class RedirectUserAfterLogin
{
    /**
     * Create the event listener.
     */
    public function __construct(private Request $request)
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Login $event): void
    {
        $user = $event->user;

        $redirectTo = $user->getRedirectAfterLogin();

        session(['url.intended' => $redirectTo]);
    }
}
