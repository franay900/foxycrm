<?php

use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\UserBaseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/organization', [OrganizationController::class, 'index'])->name('organization.index');
Route::get('/organization/create', [OrganizationController::class, 'create'])->name('organization.create');
Route::post('/organization', [OrganizationController::class, 'store'])->name('organization.store');
Route::get('/organization/{organization}', [OrganizationController::class, 'show'])->name('organization.show');
Route::get('/organization/{organization}/edit', [OrganizationController::class, 'edit'])->name('organization.edit');
Route::patch('/organization/{organization}', [OrganizationController::class, 'update'])->name('organization.update');
Route::delete('/organization/{organization}', [OrganizationController::class, 'destroy'])->name('organization.destroy');


Route::get('/userbase',[UserBaseController::class, 'index'])->name('userbase.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
