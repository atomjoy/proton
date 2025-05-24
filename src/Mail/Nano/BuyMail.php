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
    public $products_flex = null;

    public function __construct(?User $user, $text, $products = [], $products_flex = [])
    {
        $this->user = $user;
        $this->text = $text;
        $this->products = $products;
        $this->products_flex = $products_flex;
    }

    public function build()
    {
        return $this->subject(trans('proton.default.subject'))
            ->view('proton::email.nano.buy');
    }
}
