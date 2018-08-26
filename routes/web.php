<?php

Route::get('/','HomeController@index')->name('home');

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['middleware' => 'auth'], function() {

//Just authenticated users could enter in Kino
	Route::get('/kino', 'KinoController@index')->name('kino.index');
	Route::get('/kino/statistics', 'KinoController@stats')->name('kino.stats');
	Route::get('/kino/actors', 'KinoController@actors')->name('kino.actors');	
	Route::get('/kino/actor/{slug}', 'KinoController@actor')->name('kino.actor');
	Route::get('/kino/categories', 'KinoController@categories')->name('kino.categories');
	Route::get('/kino/category/{slug}', 'KinoController@category')->name('kino.category');
	Route::get('/kino/ages', 'KinoController@ages')->name('kino.ages');
	Route::get('/kino/age/{slug}', 'KinoController@age')->name('kino.age');
	Route::get('/kino/languages', 'KinoController@languages')->name('kino.languages');
	Route::get('/kino/language/{slug}', 'KinoController@language')->name('kino.language');
	Route::get('/kino/year/{slug}', 'KinoController@year')->name('kino.year');
	Route::get('/kino/{slug}', 'KinoController@show')->name('kino.show')->where('slug', '[\w\d\-\_]+');
	
});


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

//my routes	
	// dashboard
	Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');	

	//films
	Route::get('/films', 'FilmsController@index')->name('films.index');
	Route::get('/films/year/{year}', 'FilmsController@year')->name('films.year');
	Route::get('/films/years', 'FilmsController@years')->name('years.index');
	Route::get('/films/create', 'FilmsController@create')->name('films.create');
	Route::post('/films/store', 'FilmsController@store')->name('films.store');
	Route::get('/films/trashed', 'FilmsController@trashed')->name('films.trashed');
	Route::get('/films/{slug}/restore', 'FilmsController@restore')->name('films.restore');
	Route::delete('/films/{slug}/kill', 'FilmsController@kill')->name('films.kill');	
	Route::get('/films/{slug}', 'FilmsController@show')->name('films.show')->where('slug', '[\w\d\-\_]+');
	Route::get('/films/{slug}/edit', 'FilmsController@edit')->name('films.edit')->where('slug', '[\w\d\-\_]+');
	Route::patch('/films/{slug}', 'FilmsController@update')->name('films.update')->where('slug', '[\w\d\-\_]+');
	Route::delete('/films/{slug}/destroy', 'FilmsController@destroy')->name('films.destroy')->where('slug', '[\w\d\-\_]+');

	//categories
	Route::get('/categories', 'CategoriesController@index')->name('categories.index');
	Route::get('/categories/create', 'CategoriesController@create')->name('categories.create');
	Route::post('/categories/store', 'CategoriesController@store')->name('categories.store');
	Route::get('/categories/trashed', 'CategoriesController@trashed')->name('categories.trashed');
	Route::get('/categories/{slug}/restore', 'CategoriesController@restore')->name('categories.restore');
	Route::delete('/categories/{slug}/kill', 'CategoriesController@kill')->name('categories.kill');
	Route::get('/categories/{slug}', 'CategoriesController@show')->name('categories.show')->where('slug', '[\w\d\-\_]+');
	Route::get('/categories/{slug}/edit', 'CategoriesController@edit')->name('categories.edit')->where('slug', '[\w\d\-\_]+');
	Route::patch('/categories/{slug}', 'CategoriesController@update')->name('categories.update')->where('slug', '[\w\d\-\_]+');
	Route::delete('/categories/{slug}/destroy', 'CategoriesController@destroy')->name('categories.delete');

	//languages
	Route::get('/language', 'LanguageController@index')->name('language.index');
	Route::get('/language/create', 'LanguageController@create')->name('language.create');
	Route::post('/language/store', 'LanguageController@store')->name('language.store');
	Route::get('/language/trashed', 'LanguageController@trashed')->name('language.trashed');
	Route::get('/language/{slug}/restore', 'LanguageController@restore')->name('language.restore');
	Route::delete('/language/{slug}/kill', 'LanguageController@kill')->name('language.kill');
	Route::get('/language/{slug}', 'LanguageController@show')->name('language.show')->where('slug', '[\w\d\-\_]+');
	Route::get('/language/{slug}/edit', 'LanguageController@edit')->name('language.edit')->where('slug', '[\w\d\-\_]+');
	Route::patch('/language/{slug}', 'LanguageController@update')->name('language.update')->where('slug', '[\w\d\-\_]+');
	Route::delete('/language/{slug}/destroy', 'LanguageController@destroy')->name('language.delete')->where('slug', '[\w\d\-\_]+');
	
	//actors
	Route::get('/actors', 'ActorsController@index')->name('actors.index');
	Route::get('/actors/create', 'ActorsController@create')->name('actors.create');	
	Route::post('/actors/store', 'ActorsController@store')->name('actors.store');
	Route::get('/actors/trashed', 'ActorsController@trashed')->name('actors.trashed');
	Route::get('/actors/{slug}/restore', 'ActorsController@restore')->name('actors.restore');
	Route::delete('/actors/{slug}/kill', 'ActorsController@kill')->name('actors.kill');
	Route::get('/actors/{slug}', 'ActorsController@show')->name('actors.show')->where('slug', '[\w\d\-\_]+');
	Route::get('/actors/{slug}/edit', 'ActorsController@edit')->name('actors.edit')->where('slug', '[\w\d\-\_]+');
	Route::patch('/actors/{slug}', 'ActorsController@update')->name('actors.update')->where('slug', '[\w\d\-\_]+');
	Route::delete('/actors/{slug}', 'ActorsController@destroy')->name('actors.destroy')->where('slug', '[\w\d\-\_]+');
	
	//fsks
	Route::get('/fsk', 'FskController@index')->name('fsk.index');
	Route::get('/fsk/create', 'FskController@create')->name('fsk.create');	
	Route::post('/fsk/store', 'FskController@store')->name('fsk.store');
	Route::get('/fsk/trashed', 'FskController@trashed')->name('fsk.trashed');
	Route::get('/fsk/{slug}/restore', 'FskController@restore')->name('fsk.restore');
	Route::delete('/fsk/{slug}/kill', 'FskController@kill')->name('fsk.kill');
	Route::get('/fsk/{slug}', 'FskController@show')->name('fsk.show')->where('slug', '[\w\d\-\_]+');
	Route::get('/fsk/{slug}/edit', 'FskController@edit')->name('fsk.edit')->where('slug', '[\w\d\-\_]+');
	Route::patch('/fsk/{slug}', 'FskController@update')->name('fsk.update')->where('slug', '[\w\d\-\_]+');
	Route::delete('/fsk/{slug}/destroy', 'FskController@destroy')->name('fsk.delete')->where('slug', '[\w\d\-\_]+');

	//Search
	Route::get('/films/results', 'FilmsController@results')->name('films.results');

	//admin Users
	Route::resource('users', 'UserController');

});

