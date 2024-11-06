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

# UseApi

To get data via api you must change the parameter $useApi in your table file.

```php
private static bool $useApi = true;
```

and change

```php
protected static array $apiQuery = [
'url' => '/api/user', //string; url get
'method' => 'GET', //string;  method
'value' => [], // array;
'paginate' => false, //bool; use paginate
'count_paginate' => 5, //number; value = Model:: paginate in api !!!
'url_search' => '/api/user/search', //string; default example  10 records
];
```

Don't forget to create api routes with your middlewares.
It's better to use resources for models

- example:

api route:

```php
Route::resource('/user', UserController::class);
```

UserController::class

```php
    public function index(\Illuminate\Http\Request  $request)
    {
        $sortBy = $request->query('sortBy');
        
        $sortType = $request->query('sortType');
        
        $limit = $request->query('limit');
        
        if( $sortBy == "null"){
            $sortBy = 'id';
        }
        if( $sortType == "null" ){
            $sortType = 'asc';
        }
        if( $limit == "null"){
            $limit = 10;
        }

        return UserResource::collection(User::query()
            ->orderBy($sortBy,$sortType)
            ->paginate
            ($limit));
    }
```

$limit = 'count_paginate' in $apiQuery

and UserResource example:

```php
class UserResource extends JsonResource
{
/**
* Transform the resource into an array.
*
* @return array<string, mixed>
*/
public function toArray(Request $request): array
{

        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'image'=> 'https://img.freepik.com/free-photo/adorable-looking-kitten-with-yarn_23-2150886292.jpg?semt=ais_hybrid',
            'email_verified_at'=>$this->email_verified_at,
            'rating'=> random_int(0,5),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'expanded'=>$this->expanded
        ];
}
}
```



