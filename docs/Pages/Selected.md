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

# Selected

Use to selected items, example

```php
       protected static bool $useItemSelected = true;
     }
```

<img src="https://github.com/kovyakin/components/blob/master/docs/images/5.png" alt="image">

if $allowGroupDelete = true then you can delete multiple selected records

```php
       protected static bool $allowGroupDelete = true;
     
```

```php
     public function destroySelected(Request $request){

    //        dd($request->value);
    $total = User::count();
    return ['success' => true,'total' => $total];
}
```

your method in api should contain string address 'delete/selected'

```php
  Route::delete('/user/delete/selected', [UserController::class, 'destroySelected']);
```


