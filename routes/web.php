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

Route::get('/countries','CountriesController@showAllCountry');



Route::get('/countries/create','CountriesController@create');

Route::post('/countries/create','CountriesController@store');

Route::get('/countries/{id}','CountriesController@showCountryDetail');

Route::get('/countries/{country}/edit','CountriesController@edit'); 

