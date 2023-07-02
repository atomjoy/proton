# Proton html email template

Laravel proton html email template blade components.

## Install package

```sh
composer create-project laravel/laravel:^10.0 email-app
cd email-app
composer require atomjoy/proton
```

### Send email example

```php
<?php
use App\Models\User;
use Proton\Mail\DefaultMail;
use Proton\Mail\RegisterMail;
use Proton\Mail\PasswordMail;

Route::get('/proton', function () {
  // Set locale
  // app()->setLocale('pl');

  // User (required columns: id, name, code)
  // $user = User::first();

  // Send email sample
  Mail::to('user@laravel.com')->send(new DefaultMail());

  // User reset password, use null for example
  Mail::to('user@laravel.com')->send(new PasswordMail(null, 'XXX-123'));

  // User activation link (User model required columns: id, name, code), use null for example
  Mail::to('user@laravel.com')->send(new RegisterMail(null));

  // Show example email view
  return view('proton::email.default');
  // return view('proton::email.password');
  // return view('proton::email.register');
  // return view('proton::email.signature');
});
```

## Edit email templates

```sh
# Edit package email views in resources/views/vendor/proton
php artisan vendor:publish --tag=proton-views --force

# Edit translations (optional)
php artisan vendor:publish --tag=proton-lang --force

# Copy images (optional)
php artisan vendor:publish --tag=proton-mail --force

# Create config file (optional)
php artisan vendor:publish --tag=proton-config --force
```

## Create Laravel mail class

```sh
# Or create your own mail class
php artisan make:mail PromoMail
```

## Email images

### Example email

<img src="https://raw.githubusercontent.com/atomjoy/proton/main/proton-email.png" width="100%">

### Activation email

<img src="https://raw.githubusercontent.com/atomjoy/proton/main/proton-register.png" width="100%">

### Password email

<img src="https://raw.githubusercontent.com/atomjoy/proton/main/proton-password.png" width="100%">

### Html email signature image

<img src="https://raw.githubusercontent.com/atomjoy/proton/main/proton-signature.png" width="100%">
