<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/app{any}', 'IndexController@index')->where('any', '(/?$|/.*)');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/training', 'IndexController@index')->where('any', '(/?$|/.*)');