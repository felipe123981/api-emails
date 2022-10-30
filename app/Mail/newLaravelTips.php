<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class newLaravelTips extends Mailable
{
	use Queueable, SerializesModels;

	private $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(\stdClass $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
	$this->subject('Confirm your account');
	$this->to($this->user->email, $this->user->name);
	return $this->markdown('mail.newLaravelTips', [
		'user' => $this->user
	]);
    }
}
