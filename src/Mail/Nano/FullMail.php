<?php

namespace Proton\Mail\Nano;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class FullMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user = null;
    public $text = null;
    public $url = null;
    public $password = null;

    public function __construct(?User $user, $text, $url = '', $password = '123456')
    {
        $this->user = $user;
        $this->text = $text;
        $this->url = $url;
        $this->password = $password;
    }

    public function build()
    {
        return $this->subject(trans('proton.default.subject'))
            ->view('proton::email.nano.full');
    }
}
