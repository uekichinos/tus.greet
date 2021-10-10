# TUS.Greet

[![Run tests](https://github.com/uekichinos/tus.greet/actions/workflows/default.yml/badge.svg)](https://github.com/uekichinos/tus.greet/actions/workflows/default.yml)
[![StyleCI](https://github.styleci.io/repos/415530368/shield?branch=main)](https://github.styleci.io/repos/415530368?branch=main)
[![Packagist](https://poser.pugx.org/the-usual/greet/d/total.svg)](https://packagist.org/packages/the-usual/greet)

Package description: This package is all about the usual "Good ..." greeting based on time and with option to add name at the end link "Good ..., John Doe".

Link to [Packagist](https://packagist.org/packages/the-usual/greet)

## Installation

Install via composer
```bash
composer require the-usual/greet
```

### Publish package assets

```bash
php artisan vendor:publish --provider="TheUsual\Greet\ServiceProvider"
```

## Usage

```
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TheUsual\Greet\Greet;

class HomeController extends Controller
{
    public function greet()
    {
        echo Greet::hello('John Doe');
    }
}

```


This package is bootstrapped with the help of [melihovv/laravel-package-generator](https://github.com/melihovv/laravel-package-generator).
