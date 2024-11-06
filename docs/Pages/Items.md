<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">

<div style="text-align: center;">

![GitHub watchers](https://img.shields.io/github/watchers/kovyakin/components)
![GitHub Downloads (all assets, all releases)](https://img.shields.io/github/downloads/kovyakin/components)
![Packagist Stars](https://img.shields.io/packagist/stars/kovyakin/components)
![Packagist Version](https://img.shields.io/packagist/v/kovyakin/components)
![Packagist License](https://img.shields.io/packagist/l/kovyakin/components)

</div>

# Component Table for Laravel

## Requirements

- Laravel 11+.
- PHP 8.2 +.

## Main

This package is developed on Vue3 (https://github.com/HC200ok/vue3-easy-data-table/)
and is added to work with Laravel.

# Items

Set table items in your table model, example

```php
   protected static function dataTable(): Collection| null
     {
         return self::$items =  User::all();
//         return self::$items = null;
     }
```

You can use scopes, middleware, etc.
Install only if you get data not through the API, but directly from the model.
If there is a lot of data (for example, more than 5000 records),
then it is better to work through the API

