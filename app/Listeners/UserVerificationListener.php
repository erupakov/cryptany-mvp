<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use \Mail;
use \Log;
use \App\Mail\UserVerifiedMail;
use \App\Mail\UserActivatedMail;
use Illuminate\Queue\SerializesModels;

class UserVerificationListener
{
	use SerializesModels;
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
        ->queue(new UserVerifiedMail($u));
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function onActivate(\App\Events\MerchantCreatedEvent $event)
    {
		// Send email to merchant
        // send mail about successful transaction activation
        $u = $event->user;

        Mail::to($u->email)
        ->queue(new UserActivatedMail($u));

		// pass the newly created merchant to cgw
		$t = file_get_contents("https://cgw.cryptany.io/data/regapiuser?id=".urlencode($u->hash)."&secret=".urlencode($u->secret));
    }
}
