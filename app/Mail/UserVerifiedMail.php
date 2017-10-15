<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserVerifiedMail extends Mailable
{
    use Queueable, SerializesModels;

	public $subject = 'New merchant registered';

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
        return $this->view('emails.user_verified')->with('user',$this->_user)
			->with('url','https://mvp.cryptany.io/merchant/updateStatus87561?hash='.$this->_user->hash);
    }
}
