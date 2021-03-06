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

/*Route::get('/', function () {
    return view('index');
});*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/posts', App\Http\Controllers\PostsController::class)->only(['index', 'store']);
Route::resource('/users', App\Http\Controllers\UsersController::class)->only(['update', 'show']);

Route::middleware('auth')->group(function () {
    Route::post('like', [App\Http\Controllers\LikeController::class, 'like'])->name('like');
    Route::delete('like', [App\Http\Controllers\LikeController::class, 'unlike'])->name('unlike');
});