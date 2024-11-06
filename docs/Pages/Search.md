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

# Block search

set to display search block

```php
        protected static bool $show_block_search = true;

```

set the headings and styles of the search block fields,
styles - normal css styles

```php
           protected static array $block_search = [
         'text_search_field' => 'search field',
         'text_search_value' => 'search value',
         'text_search_default' => 'all',

 //                          example
         'style_div_search'=>'font-size:10px; background-color:red; color:blue;',
         'style_search_field'=>'font-size:20px; background-color:red; padding: 10px',
         'style_search_field_select'=>'font-size:10px;',
         'style_search_value' => 'font-size:20px;background-color:red;padding: 1px',
         'style_search_value_input' => 'font-size:20px;background-color:white;color:blue',
 //        'text_search_field'=>'Поиск по полю',
 //        'text_search_value'=>'Искать значение',
 //        'text_search_default'=>'Везде',
     ];

```


