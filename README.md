

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

# Component Table for Laravel

## Requirements

- Laravel 11+.
- PHP 8.2 +.

<img src="https://github.com/kovyakin/components/blob/master/docs/images/1.png" alt="image">

## Step by step

1. Install laravel.
2. Install example laravel/jetstream.
3. Install laravel/api.
4. In your model -  use HasApiTokens;
5. composer require kovyakin/components.
6. php artisan vendor:publish --tag=components.
7. Create your own table: php artisan components:create-table.
8. Create your resource, example php artisan make:resource UserResource.
```php
 public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'created_at' => $this->created_at->format('d-m-Y'),
            'rating' => random_int(0, 5), // or $this->rating in your model attributes
            'updated_at' => $this->updated_at->format('d-m-Y'),
            'expanded' => $this->expanded, // or $this->rating in your model attributes
            'checkbox1' => (bool)random_int(0, 1), // or $this->rating in your model attributes
        ];
    }
```
9. Create your own controller: php artisan components:create-table-controller
  - enter your controller name;
  - enter your model name  of the model class that is used in the controller;
  - enter your name of the resource class that is used in the controller
10. In namespace App\Components\Table in the table you will need to set data and styles.
11. in your controller (namespace App\Http\Controllers) you will need to write all the logic and create the necessary blades
12. create a new router like this:

```php
Route::table('/user', TableController::class);
```

13. Place on the main page

```php
@stack('table')
```

### An example can be seen here: [Example](https://github.com/kovyakin/table)

[Usage](https://github.com/kovyakin/components/wiki), you can see the usage documentation here. (Wiki)
[Step by step](https://github.com/kovyakin/components/wiki/StepByStep), you can see the usage documentation here. (Wiki)
## Changelog

[CHANGELOG.md](CHANGELOG.md), what has changed recently.

## Author

- [Kovyakin Dmitry](https://github.com/kovyakin)

## License

This is MIT License (MIT). Take a look to see [License File](LICENSE.md).



