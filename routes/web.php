<?php

use App\Http\Controllers\DetailController;
use App\Http\Controllers\PropertiController;
use App\Http\Controllers\UploadController;
use App\Models\Upload;
use Illuminate\Support\Facades\Auth;
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

// INDEX
Route::get('/{id}/detail-property', [PropertiController::class, 'view']);
Route::get('/', [PropertiController::class, 'index']);
// PROPERTIES
Route::get('properti', [App\Http\Controllers\admin\UploadController::class, 'index']);
Route::get('properti-add', [App\Http\Controllers\admin\UploadController::class, 'create']);
Route::post('properti-store', [App\Http\Controllers\admin\UploadController::class, 'store']);
// USER
Route::get('/users', [App\Http\Controllers\admin\UserController::class, 'ShowUsers'])->name('ShowUsers');
Route::get('/users-add', [App\Http\Controllers\admin\UserController::class, 'AddUsers'])->name('AddUsers');
Route::post('/users-insert', [App\Http\Controllers\admin\UserController::class, 'InsertUsers'])->name('InsertUsers');
Route::get('/users-edit/{id}', [App\Http\Controllers\admin\UserController::class, 'EditUsers'])->name('EditUsers');
Route::post('/user-update/{id}', [App\Http\Controllers\admin\UserController::class, 'UpdateUser'])->name('UpdateUser');
Route::get('/user-delete/{id}', [App\Http\Controllers\admin\UserController::class, 'DeleteUser'])->name('DeleteUser');


Route::get('/property', function () {
    return view('users.properti');
});
Route::get('/index', function () {
    return view('users.index');
});
Route::get('/agent', function () {
    return view('users.agent');
});
Route::get('/contact', function () {
    return view('users.contact');
});
Route::get('/faqs', function () {
    return view('users.faqs');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
