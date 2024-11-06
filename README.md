

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

### Installation

- composer require kovyakin/components

- php artisan vendor:publish --tag=components

    ### Usage
- php artisan vendor:publish --tag=components or php artisan components:initialize
- Add to the end of the file :
```php
    <script src="{{asset('/vendor/components/table/table.js')}}" type="module"></script>
    <link href="{{asset('/vendor/components/table/table.css')}}" rel="stylesheet" />
    <link href="{{asset('/vendor/components/table/table_style.css')}}" rel="stylesheet" />
```
- The next step is to create a table class,example
```php
 php artisan components:table UserTable
```

you will create a table class in "app/Components/Table/UserTable.php".

- Set table headers and fields in the method

use the component <x-table-component table="UserTable" /> in blade to display the table,
example:
```php
 protected static array $columns = [
         ['text' => "ID", 'value' => "id", 'sortable' => true, 'width' => '40', 'fixed' => true],
         ['text' => "Имя", 'value' => "name", 'sortable' => true],
         ['text' => "Email", 'value' => "email", 'sortable' => true],
         ['text' => "Email verified", 'value' => "email_verified_at"],
         ['text' => "Created at", 'value' => "created_at"],
         ['text' => "Updated at", 'value' => "updated_at"],
     ];
```
Where 
- 'text' - table header text;
- 'value' - Field from the database, must match the model, for example app/Models/User.php;
- 'sortable' - column sorting permission;
- 'width' - column width;
'fixed' - to fix the column or not.
 

## Changelog

 [CHANGELOG.md](CHANGELOG.md), what has changed recently.

## Author

- [Kovyakin Dmitry](https://github.com/kovyakin)

## License

This is MIT License (MIT). Take a look to see [License File](LICENSE.md).



