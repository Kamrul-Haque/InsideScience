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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tags','TagController@index')->name('tag');
Route::get('/tags/create','TagController@create')->name('tag.create');
Route::post('/tags','TagController@store')->name('tag.store');
Route::get('/tags/{id}/edit','TagController@edit')->name('tag.edit');
Route::put('/tags/{id}/update','TagController@update')->name('tag.update');
Route::delete('/tags/{id}/delete','TagController@destroy')->name('tag.destroy');

Route::resource('articles','ArticleController')->middleware('auth');
