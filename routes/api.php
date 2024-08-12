<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\StoreController;
use App\Http\Controllers\User\IndexController;
use App\Http\Controllers\User\UpdateController;
use App\Http\Controllers\User\DeleteController;
use App\Http\Controllers\User\ShowController;

Route::group(['prefix' => 'users'], function(){
    Route::post('/', StoreController::class);
    Route::get('/', IndexController::class);
    Route::patch('/{user}', UpdateController::class);
    Route::delete('/{user}', DeleteController::class);
    Route::get('/{user}', ShowController::class);
});
