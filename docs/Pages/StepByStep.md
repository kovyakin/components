<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">

<div style="text-align: center;">

![GitHub watchers](https://img.shields.io/github/watchers/kovyakin/components)
![Packagist Stars](https://img.shields.io/packagist/stars/kovyakin/components)

![Packagist Version](https://img.shields.io/packagist/v/kovyakin/components)
![Packagist License](https://img.shields.io/packagist/l/kovyakin/components)

</div>

# Component Table for Laravel

## Requirements

- Laravel 11+.
- PHP 8.2 +.

## Main

This package is developed on Vue3
and is added to work with Laravel.

### Installation

- composer require kovyakin/components

- php artisan vendor:publish --tag=components

  # Usage
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

### Set table headers and fields in the method

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

### Set Items:

```php
     protected static function dataTable(): Collection| null
     {
         return self::$items =  User::all();
     }
```

### Set in "app/Components/Table/UserTable.php"

```php
     private static bool $useApi = false;
```

now you can use the component in your blade, example

```php
   <x-table-component table="UserTable" /> 
```

where table="UserTable" - table class name, case insensitive.

## Important! In one blade you can use only one component with a certain name, and many components with different names

  <img src="https://github.com/kovyakin/components/blob/master/docs/images/2.png" alt="image">