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

# Columns

Set table headers in your table model, example

```php
  ['text' => "ID", 'value' => "id", 'sortable' => true, 'width' => '40', 'fixed' => true],
         ['text' => "Image", 'value' => "image",'width'=>20],
         ['text' => "Имя", 'value' => "name", 'sortable' => true],
         ['text' => "Email", 'value' => "email", 'sortable' => true],
         ['text' => "Rating", 'value' => "rating", 'sortable' => true],
         ['text' => "Email verified", 'value' => "email_verified_at"],
         ['text' => "Created at", 'value' => "created_at"],
         ['text' => "Updated at", 'value' => "updated_at"],
         ['text' => "Operation", 'value' => "operation"], // for edit or delete record in table. value'=> "operation" -
         // only for edit  or delete. For operation require id !!!
```

value - must match the transmitted headers of your model or scopes etc.

#### Important

'value' => "image" - for image output only !
'value' => "operation" - only for actions with table fields !


