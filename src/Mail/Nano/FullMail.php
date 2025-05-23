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
    public $code = null;
    public $password = null;

    public function __construct(?User $user, $text, $url = '', $password = '', $code = '')
    {
        $this->user = $user;
        $this->text = $text;
        $this->url = $url;
        $this->password = $password;
        $this->code = $code;
    }

    public function build()
    {
        return $this->subject(trans('proton.default.subject'))
            ->view('proton::email.nano.full');
    }
}
