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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\UserViewController::class, 'index'])->middleware('auth');

Route::get('/admin/themes', [App\Http\Controllers\UserViewController::class, 'themes'])->middleware('auth');

Route::get('/{username}', [App\Http\Controllers\UserViewController::class, 'viewuser']);

Route::post('/admin/link-add', [App\Http\Controllers\UserViewController::class, 'add_links']);

Route::post('/admin/link-edit', [App\Http\Controllers\UserViewController::class, 'edit_links']);

Route::post('/admin/link-delete', [App\Http\Controllers\UserViewController::class, 'delete_links']);




