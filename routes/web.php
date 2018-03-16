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
	Route::get('/films/index', 'FilmsController@index')->name('films.index');
	Route::get('/films/create', 'FilmsController@create')->name('films.create');
	Route::post('/films/store', 'FilmsController@store')->name('films.store');
	Route::get('/films/show/{slug}', 'FilmsController@show')->name('films.show');
	Route::get('/films/delete', 'FilmsController@destroy')->name('films.delete');

	//categories
	Route::get('/categories/index', 'CategoriesController@index')->name('categories.index');
	Route::get('/categories/create', 'CategoriesController@create')->name('categories.create');
	Route::post('/categories/store', 'CategoriesController@store')->name('categories.store');
	Route::get('/category/show/{id}', 'CategoriesController@show')->name('categories.show');
	Route::patch('/categories/edit', 'CategoriesController@edit')->name('categories.edit');
	Route::get('/categories/delete', 'CategoriesController@delete')->name('categories.delete');

	//languages
	Route::get('/language/index', 'LanguageController@index')->name('language.index');
	Route::get('/language/create', 'LanguageController@create')->name('language.create');
	Route::post('/language/store', 'LanguageController@store')->name('language.store');


	//actors
	Route::get('/actors/index', 'ActorsController@index')->name('actors.index');
	Route::get('/actors/create', 'ActorsController@create')->name('actors.create');	
	Route::post('/actors/store', 'ActorsController@store')->name('actors.store');	
	Route::get('/actors/show/{id}', 'ActorsController@show')->name('actors.show');

});

