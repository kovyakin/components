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

# Expanded

use expanded to customize the expanded row, example

```php
    public static bool $expanded = true;
```

the item must contain an expanded field and be passed with the model data, like this

example User model:
```php
       protected function expanded():Attribute
    {
        return Attribute::make(
            get: fn () => view('components::expanded')->with(['user'=>User::find($this->id)])->render(),
        );

    }
```
or in any other way.
view('components::expanded') - your viev.


<img src="https://github.com/kovyakin/components/blob/master/docs/images/7.png" alt="image">

in the example
```php
   <div>
    <div class="bg-red-500 flex justify-center py-6 h-[400px]">
        <img src="https://image-skincare.ru/wa-data/public/shop/products/28/06/628/images/1419/1419.600.jpg">
    </div>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Created_at</th>
            <th>Updated_at_at</th>
        </tr>
        <tr>
            <td>{{$user['name']}}</td>
            <td>{{$user['email']}}</td>
            <td>{{$user['created_at']}}</td>
            <td>{{$user['updated_at']}}</td>
        </tr>

    </table>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

    </style>
</div>

<style>
    .aligncenter {
        text-align: center;
    !important;
    }
</style>

```

