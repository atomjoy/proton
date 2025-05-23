<?php

namespace Proton\Mail\Nano;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class BuyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user = null;
    public $text = null;
    public $products = null;

    public function __construct(?User $user, $text, $products = [])
    {
        $this->user = $user;
        $this->text = $text;
        $this->products = $products;
    }

    public function build()
    {
        return $this->subject(trans('proton.default.subject'))
            ->view('proton::email.nano.buy');
    }
}
