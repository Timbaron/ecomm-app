<?php

use App\Http\Controllers\HomeController;
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

/* This is a route definition. It is telling Laravel that when a user visits the root of the website,
it should call the `index` method of the `HomeController` class. */
Route::get('/{currentPage?}', [HomeController::class,'index'])->name('home');

Route::get('/getItem/{item}', [HomeController::class,'getItem'])->name('getItem');
