<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// USER
Route::get('/users', [App\Http\Controllers\admin\UserController::class, 'ShowUsers'])->name('ShowUsers');
Route::get('/users-add', [App\Http\Controllers\admin\UserController::class, 'AddUsers'])->name('AddUsers');
Route::post('/users-insert', [App\Http\Controllers\admin\UserController::class, 'InsertUsers'])->name('InsertUsers');
Route::get('/users-edit/{id}', [App\Http\Controllers\admin\UserController::class, 'EditUsers'])->name('EditUsers');
Route::post('/user-update/{id}', [App\Http\Controllers\admin\UserController::class, 'UpdateUser'])->name('UpdateUser');
Route::get('/user-delete/{id}', [App\Http\Controllers\admin\UserController::class, 'DeleteUser'])->name('DeleteUser');
