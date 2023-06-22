# Proton html email template

Laravel proton html email template blade components.

## Create email class

```sh
php artisan make:mail ProtonMail
```

### ProtonMail class

```php
<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ProtonMail extends Mailable
{
 use Queueable, SerializesModels;

 /**
  * Create a new message instance.
  */
 public function __construct()
 {
  //
 }

 /**
  * Get the message envelope.
  */
 public function envelope(): Envelope
 {
  return new Envelope(
   subject: '🙂 Welcome!',
  );
 }

 /**
  * Get the message content definition.
  */
 public function content(): Content
 {
  return new Content(
   view: 'proton.email',
  );
 }

 /**
  * Get the attachments for the message.
  *
  * @return array<int, \Illuminate\Mail\Mailables\Attachment>
  */
 public function attachments(): array
 {
  return [];
 }
}
```

### Send email

```php
Route::get('/proton', function () {
  // Send email
  Mail::to('user@laravel.com')->send(new ProtonMail());

  // Show email
  return view('proton.email');
});
```

## Sample image (thunderbird)

<img src="https://raw.githubusercontent.com/atomjoy/proton/main/proton-email.png" width="100%">
