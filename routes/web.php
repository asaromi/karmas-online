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
    if(auth()->user())
        return redirect()->route('home');
    else
        return redirect()->route('login');
})->name('root');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::put('/print', 'HomeController@print')->name('print');

Route::get('/register', 'Auth\RegisterController@index')->name('register');
Route::get('/register/getDept/{id}', 'Auth\RegisterController@getDept')->name('getDepartment');