<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserVerificationListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
		//Send email to support
         // send mail about successful transaction creation
         $u = $event->user;

         Mail::to('support@cryptany.io')
         ->send(new UserVerifiedMail($u));
    }
}
