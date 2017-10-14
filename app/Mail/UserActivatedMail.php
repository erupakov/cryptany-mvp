<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserActivatedMail extends Mailable
{
    use Queueable, SerializesModels;

	public $subject = 'Merchant activation';
	public $from = [
			['address'=>'support@cryptany.io', 'name'=>'Cryptany support']
		];

	private $_user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($u)
    {
        $this->_user = $u;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.user_activated')->with('user',$this->_user);
    }
}
