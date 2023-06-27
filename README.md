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
# Create sample mail class in app/Mail
php artisan vendor:publish --tag=proton-mail --force

# Edit package email views in resources/views/vendor/proton
php artisan vendor:publish --tag=proton-views --force
```

### Send email example

```php
Route::get('/proton', function () {
  // Send email sample
  Mail::to('user@laravel.com')->send(new ProtonMail());

  // User reset password
  Mail::to('user@laravel.com')->send(new ProtonPasswordMail('XXX-123'));

  // User activation link (User model requires columns: id, name, code), use User or null for example
  Mail::to('user@laravel.com')->send(new ProtonRegisterMail(null));

  // Show example email view
  return view('proton::email.default');
  // return view('proton::email.password');
  // return view('proton::email.register');
});
```

## Create mail class

```sh
# Or create your own mail class
php artisan make:mail PromoMail
```

## Email image

<img src="https://raw.githubusercontent.com/atomjoy/proton/main/proton-email.png" width="100%">
