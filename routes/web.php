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
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'verify']);
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::get('/admin/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
Route::get('/alluser', [App\Http\Controllers\UserController::class,'index'])->name('alluser');
Route::get('/live_search/action', [App\Http\Controllers\UserController::class,'action'])->name('live_search.action');