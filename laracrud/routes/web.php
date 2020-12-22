<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ContactController;
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

//Route::get('/', function () {
//    return view('profile');
//});
//Route::get('/{lang}', function ($lang) {
//    App:: setlocale($lang);
//    return view('profile');
//});
Route::resource('Product', 'App\Http\Controllers\ProductController');
Route::resource('Table', 'App\Http\Controllers\TableController');
Route::resource('Data', 'App\Http\Controllers\DataController');
Route::resource('video', 'App\Http\Controllers\VideoController');
Route::resource('contacts', 'App\Http\Controllers\ContactController');

