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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// la route patch ou post pour update ou creer doit correspondre a la route get pour show ou create
Route::get('/profiles/{user}', 'ProfilesController@show')->name('profiles.show');
Route::get('/profiles/{user}/edit', 'ProfilesController@edit')->name('profiles.edit');
Route::patch('/profiles/{user}', 'ProfilesController@update')->name('profiles.update');
Route::get('profiles/{user}/details', 'ProfilesController@details')->name('profiles.details');

Route::get('/temoignage/{user}', 'TemoignageController@show')->name('temoignage.show');
Route::get('/temoignage/{user}/edit','TemoignageController@edit')->name('temoignage.edit');
Route::patch('/temoignage/{user}', 'TemoignageController@update')->name('temoignage.update');

Route::get('/stages', 'StagesController@index')->name('stages.index');
//Route::get('/stages/edit','StagesController@edit')->name('stages.edit');
//Route::get('/stages/update', 'StagesController@update')->name('stages.update');
Route::get('/stages/show/{stage}', 'StagesController@show')->name('stages.show');
Route::get('/stages/create', 'StagesController@create')->name('stages.create');
Route::post('/stages/create', 'StagesController@store')->name('stages.store');

Route::get('/enquete', 'EnqueteController@create')->name('enquete.create');
Route::post('/enquete', 'EnqueteController@store')->name('enquete.store');

