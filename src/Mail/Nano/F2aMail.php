<?php

namespace Proton\Mail\Nano;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class F2aMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user = null;
    public $password = null;

    public function __construct(User $user, $password)
    {
        $this->user = $user;
        $this->password = $password;
    }

    public function build()
    {
        return $this->subject(trans('proton.f2a.subject'))
            ->view('proton::email.nano.f2a');
    }
}
