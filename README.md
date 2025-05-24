# Laravel Html Email Components (Blade)

Html email blade components for Laravel. Html email footer signature example. Products html email newsletter (RWD).

## Install package

```sh
# Create laravel project
composer create-project laravel/laravel:^12.0 email-app
# Or
composer create-project laravel/laravel email-app
cd email-app
composer require atomjoy/proton
```

### Send email example

```php
<?php
use App\Models\User;

// Proton emails
use Proton\Mail\DefaultMail;
use Proton\Mail\RegisterMail;
use Proton\Mail\PasswordMail;
use Proton\Mail\F2aMail;

// Nano emails
use Proton\Mail\Nano\FullMail as NanoFullMail;
use Proton\Mail\Nano\BuyMail as NanoBuyMail;

Route::get('/proton', function () {
  // User (required columns: id, name, code)
  // $user = User::first();

  $user = User::factory(1)->make([
    'email' => 'user@laravel.com'
  ])->first();

  $pr1 = [
      'image' => 'https://raw.githubusercontent.com/atomjoy/proton/refs/heads/main/public/images/laptop.jpg',
      'name' => 'Laptop MSI GeForce',
      'text' => 'Get a laptop 30% off',
      'button' => 'Buy Now',
      'url' => 'https://example.com/laptop',
      'price' => '3299',
      'currency' => 'USD',
  ];

  $pr2 = [
    'image' => 'https://raw.githubusercontent.com/atomjoy/proton/refs/heads/main/public/images/tablet.jpg',
    'name' => 'Tablet Canyon Z9',
    'text' => 'Get a ltablet 30% off',
    'button' => 'Buy Now',
    'url' => 'https://example.com/tablet',
    'price' => '2299',
    'currency' => 'USD',
  ];

  $pr3 = [
    'image' => 'https://raw.githubusercontent.com/atomjoy/proton/refs/heads/main/public/images/mobile.jpg',
    'name' => 'Samsung X25',
    'text' => 'Get a mobile 30% off',
    'button' => 'Buy Now',
    'url' => 'https://example.com/mobile',
    'price' => '1299',
    'currency' => 'USD',
  ];

  $products = [$pr1, $pr2,];
  $products_flex = [$pr1, $pr2, $pr3, $pr1, $pr2, $pr3];

  $params = [
    'user' => $user,
    'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni doloremque fuga vel similique error, necessitatibus a sequi odit, adipisci minus ad possimus fugiat alias eos accusantium animi. Eos, dolor eaque?',
    'products' => $products,
    'products_flex' => $products_flex,
  ];

  $params_full = [
    'user' => $user,
    'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni doloremque fuga vel similique error, necessitatibus a sequi odit, adipisci minus ad possimus fugiat alias eos accusantium animi. Eos, dolor eaque?',
    'url' => 'https://url.example.com',
    'password' => 'Xyz123Wo65',
    'code' => '690470',
  ];

  // Nano email
  Mail::to('user@laravel.com')->send(new NanoBuyMail(...$params));
  Mail::to('user@laravel.com')->send(new NanoFullMail(...$params_full));

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

  // Show example email view (nano)
  return view('proton::email.nano.register', ['user' => $user]);
  // return view('proton::email.nano.password', 'password' => 888777);
  // return view('proton::email.nano.f2a', ['user' => $user, 'password' => 888777]);
  // return view('proton::email.nano.default', ['user' => $user, 'message' => 'Message text here ...', 'url' => 'https://example.com']);
  // return view('proton::email.nano.full', ['user' => $user, 'message' => 'Message text here ...', 'url' => 'https://example.com', 'password' => 888777]);

  // Show example email view
  // return view('proton::email.newsletter');
  // return view('proton::email.default');
  // return view('proton::email.password');
  // return view('proton::email.register');
  // return view('proton::email.f2a', ['user' => $user, 'password' => 888777]);

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

### Proton nano email

<img src="https://raw.githubusercontent.com/atomjoy/proton/refs/heads/main/proton-nano.png" width="100%">
<img src="https://raw.githubusercontent.com/atomjoy/proton/refs/heads/main/proton-buy.png" width="100%">

### Newsletter email

<img src="https://raw.githubusercontent.com/atomjoy/proton/main/proton-newsletter.png" width="100%">

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
