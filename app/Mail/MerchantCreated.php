<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MerchantCreated extends Mailable
{
    use Queueable, SerializesModels;

	public $subject = 'Cryptany transaction confirmed';
	public $from = [
			['address'=>'support@cryptany.io', 'name'=>'Cryptany support']
		];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.merch_created');
    }
}
