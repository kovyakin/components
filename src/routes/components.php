<?php

use App\Components\Table\Table3;
use App\Http\Controllers\Api\UserController;

use Illuminate\Support\Facades\Route;

//Route::middleware(['auth:sanctum'])->prefix('api')->group(function () {
//    Route::resource('/user', UserController::class, ['only' => ['show', 'update', 'edit', 'create', 'store']])
//        ->middleware(['web']);
//
//    Route::resource(
//        '/user',
//        UserController::class,
//        ['only' => ['index', 'destroy']]
//    )
//        ->middleware(['api']);
//
//
//    Route::middleware(['api'])->group(function () {
//        Route::put('/user/{id}/checkbox', [UserController::class, 'updateCheckbox'])
//            ->middleware('api')
//            ->name('user.checkbox');
//
//        Route::post('/user/search', [UserController::class, 'search']);
//
//        Route::delete('/user/delete/selected', [UserController::class, 'destroySelected']);
//    });
//});
Route::get( 'user/search', [UserController::class, 'search']);
Route::macro('table', function ($url, $controller) {
    Route::get($url, [$controller, 'index'])->name($url . '.index');
    Route::get($url . '/create', [$controller, 'create'])->name($url . '.create');
    Route::post($url, [$controller, 'store'])->name($url . '.store')->middleware(['api', 'web']);
    Route::get($url . '/{id}', [$controller, 'show'])->name($url . '.show');
    Route::get($url . '/{id}/edit', [$controller, 'edit'])->name($url . '.edit');
    Route::put($url . '/{id}/', [$controller, 'update'])->name($url . '.update');
    Route::patch($url . '/{id}', [$controller, 'update'])->name($url . '.update');
    Route::delete($url . '/{id}', [$controller, 'destroy'])->name($url . '.destroy');
//    Route::get($url . '/search', [$controller, 'search'])->name($url . '.search');
    Route::put($url . '/{id}/checkbox', [$controller, 'updateCheckbox'])->name(
        $url . '.updateCheckbox'
    );
    Route::delete( $url . '/delete/selected', [$controller, 'destroySelected'])->name(
        $url . '.destroySelected'
    );
});

