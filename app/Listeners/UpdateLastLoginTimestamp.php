<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;

class UpdateLastLoginTimestamp
{
    /**
     * Handle the event.
     *
     * @param  \Illuminate\Auth\Events\Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $event->user->update([
            'last_login' => now()
        ]);
    }
}
