<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\StoreController;

Route::group(['prefix' => 'users'], function(){
    Route::post('/', StoreController::class);
});
