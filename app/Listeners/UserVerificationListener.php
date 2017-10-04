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
        ->send(new UserVerifiedMail($u));
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function onActivate(\App\Events\MerchantCreatedEvent $event)
    {
		//Send email to support
        // send mail about successful transaction creation
        $u = $event->user;
		Log::debug('User in activate:'.print_r($event,true));

        Mail::to($u->email)
        ->send(new UserActivatedMail($u));
    }
}
