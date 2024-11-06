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

# Block operations

### Important! The block of operations works only via API and route::resource

set to display column with buttons, example

```php
       protected static bool $column_operation = true;
```

use block_operation for show|edit|delete rows the method must contain the answer
['success' => true,'total' => $total]
where Total is the number of records in the model example: $total = User::count();
return ['success' => true,'total' => $total];

```php
            protected static array $block_operation = [
         'url' => '/api/user', //string; url  for operation
         'is_show_eyes' => true, //boolean; Show icon in table operation
         'is_show_edit' => true, //boolean; Show icon in table operation
         'is_show_delete' => true, //boolean; Show icon in table operation
         'size_icon_operation' => 16,
         'icon_color' => 'currentColor' // string; set color icon, example: red or #67c23a
     ];
```

 <img src="https://github.com/kovyakin/components/blob/master/docs/images/4.png" alt="image">

example delete record:

```php
    public function destroy(string $id)
    {
        // Logic for deleting records
       $total = User::count();
       return ['success' => true,'total' => $total];
    }
```

example show record

```php
     public function show(string $id)
    {
       dd('show '.$id);
    }
```

example edit record

```php
    public function edit(string $id)
    {
        dd('edit '.$id);
    }
```

