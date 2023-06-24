# Proton html email template

Laravel proton html email template blade components.

## Install package

```sh
composer create-project laravel/laravel:^10.0 email-app
cd email-app
composer require atomjoy/proton
```

### Overwrite files

```sh
php artisan vendor:publish --tag=proton-email --force
```

## Send email examples

```php
Route::get('/proton', function () {
  // Send email sample
  Mail::to('user@laravel.com')->send(new ProtonMail());
  
  // User reset password
  Mail::to('user@laravel.com')->send(new ProtonPasswordMail('XXX-123'));
  
  // User activation link (User model requires columns: id, name, code), use User or null for example
  Mail::to('user@laravel.com')->send(new ProtonRegisterMail(null));

  // Show example email
  return view('proton.email'); // .password | .register
});
```

## Create custom email class

```sh
php artisan make:mail PromotionMail

# Then copy proton.email view to your email view for example: proton.promotion and change details
```

## Embed image in blade

```blade
@if (file_exists(public_path() . '/vendor/webi/logo/logo.png'))
  <img class="email-logo" src="{{ $message->embed(public_path() . '/vendor/webi/logo/logo.png') }}" />
@endif
```

## Html email image

<img src="https://raw.githubusercontent.com/atomjoy/proton/main/proton-email.png" width="100%">

## Html email signature image

<img src="https://raw.githubusercontent.com/atomjoy/proton/main/proton-signature.png" width="100%">
