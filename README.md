# Proton html email template in Laravel

Html email templates for Laravel with blade components. Html email footer signature in Laravel.

## Install package

```sh
# Create laravel project
composer create-project laravel/laravel:^11.0 email-app
# Or
composer create-project laravel/laravel email-app
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
use Proton\Mail\F2aMail;

Route::get('/proton', function () {
  // User (required columns: id, name, code)
  // $user = User::first();

  $user = User::factory(1)->make([
    'email' => 'user@laravel.com'
  ])->first();

  // Send email sample
  Mail::to('user@laravel.com')->send(new DefaultMail());

  // User reset password, use null for example
  Mail::to('user@laravel.com')->send(new PasswordMail($user, '321-XXX-123'));
  Mail::to('user@laravel.com')->locale('pl')->send(new PasswordMail($user, '321-XXX-123'));

  // User activation link (User model required columns: id, name, code), use null for example
  Mail::to('user@laravel.com')->send(new RegisterMail($user));
  Mail::to('user@laravel.com')->locale('pl')->send(new RegisterMail($user));

  // Code email
  Mail::to('user@laravel.com')->send(new F2aMail($user, 888777));
  Mail::to('user@laravel.com')->locale('pl')->send(new F2aMail($user, 888777));

  // Show example email view
  return view('proton::email.default');
  // return view('proton::email.password');
  // return view('proton::email.register');
  // return view('proton::email.signature');
  // return view('proton::email.f2a', ['user' => $user, 'password' => 888777]);
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

### 2FA email

<img src="https://raw.githubusercontent.com/atomjoy/proton/main/proton-f2a.png" width="100%">

### Html email signature image

<img src="https://raw.githubusercontent.com/atomjoy/proton/main/proton-signature.png" width="100%">

## LICENSE

This project is licensed under the terms of the GNU GPLv3 license.
