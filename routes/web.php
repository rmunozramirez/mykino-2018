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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function() {

//Just authenticated users could enter in Kino
	Route::get('/kino', 'KinoController@index')->name('kino');


});



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

	Route::get('/dashboard', 'HomeController@index')->name('dashboard');

//my routes	

	//films
	Route::get('/films/create', 'FilmsController@create')->name('films.create');
	Route::post('/films/store', 'FilmsController@store')->name('films.store');

	//categories
	Route::get('/categories/index', 'CategoriesController@index')->name('categories.index');
	Route::get('/categories/create', 'CategoriesController@create')->name('categories.create');
	Route::post('/categories/store', 'CategoriesController@store')->name('categories.store');

	//languages
	Route::get('/language/index', 'LanguageController@index')->name('language.index');
	Route::get('/language/create', 'LanguageController@create')->name('language.create');
	Route::post('/language/store', 'LanguageController@store')->name('language.store');



});

