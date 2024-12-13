<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">

<div style="text-align: center;">

![GitHub watchers](https://img.shields.io/github/watchers/kovyakin/components)
![Packagist Stars](https://img.shields.io/packagist/stars/kovyakin/components)

![Packagist Version](https://img.shields.io/packagist/v/kovyakin/components)
![Packagist License](https://img.shields.io/packagist/l/kovyakin/components)

</div>

# Component Charts for Laravel

## Requirements

- Laravel 11+.
- PHP 8.2 +.

<img src="https://github.com/kovyakin/components/blob/master/src/docs/images_charts/1.png" alt="image">

## Step by step

1. Install laravel.
2. composer require kovyakin/components.
3. php artisan vendor:publish --tag=components.
4. Create your own table: php artisan components:create-charts.
5. Place on the main page

```php
@stack('charts')
```
6. you can use the component in your blade, example

```php
  <x-charts-component  charts="Charts1"></x-charts-component>
```
where table="Charts1" - table class name, case insensitive.

7. you can double click to enlarge the chart in the modal window

### An example can be seen here: [Example](https://github.com/kovyakin/charts)