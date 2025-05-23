<?php

namespace Proton\Mail\Nano;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class RegisterMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user = null;

    public function __construct(?User $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->subject(trans('proton.register.subject'))
            ->view('proton::email.nano.register');
    }
}
