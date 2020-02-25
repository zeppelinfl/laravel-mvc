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

// home routes [start]
Route::get('/', 'HomeController@index')->name('home');
	// contacts
	Route::get('/contact-us', 'ContactsController@index')->name('contactF');
	Route::post('/store', 'ContactsController@store')->name('contactStoreF');
// home routes [end]
Auth::routes();
// admin routes [start]
Route::get('/admin', 'Admin\HomeController@index')->name('admin');
	//admin contacts
	Route::get('/admin/contacts', 'Admin\ContactsController@index')->name('contactA');
	Route::get('/admin/contacts/create', 'Admin\ContactsController@create')->name('contactCreateA');
	Route::post('/admin/contacts/store', 'Admin\ContactsController@store')->name('contactStoreA');
	Route::get('/admin/contacts/edit/{id}', 'Admin\ContactsController@edit')->name('contactEditA');
	Route::get('/admin/contacts/delete/{id}', 'Admin\ContactsController@delete')->name('contactDeleteA');
	//admin countries
	Route::get('/admin/countries', 'Admin\CountriesController@index')->name('countryA');
	Route::get('/admin/countries/create', 'Admin\CountriesController@create')->name('countryCreateA');
	Route::post('/admin/countries/store', 'Admin\CountriesController@store')->name('countryStoreA');
	Route::get('/admin/countries/edit/{id}', 'Admin\CountriesController@edit')->name('countryEditA');
	Route::get('/admin/countries/delete/{id}', 'Admin\CountriesController@delete')->name('countryDeleteA');
	//admin cities
	Route::get('/admin/cities', 'Admin\CitiesController@index')->name('cityA');
	Route::get('/admin/cities/create', 'Admin\CitiesController@create')->name('cityCreateA');
	Route::post('/admin/cities/store', 'Admin\CitiesController@store')->name('cityStoreA');
	Route::get('/admin/cities/edit/{id}', 'Admin\CitiesController@edit')->name('cityEditA');
	Route::get('/admin/cities/delete/{id}', 'Admin\CitiesController@delete')->name('cityDeleteA');
	//admin categories
	Route::get('/admin/categories', 'Admin\CategoriesController@index')->name('categoryA');
	Route::get('/admin/categories/create', 'Admin\CategoriesController@create')->name('categoryCreateA');
	Route::post('/admin/categories/store', 'Admin\CategoriesController@store')->name('categoryStoreA');
	Route::get('/admin/categories/edit/{id}', 'Admin\CategoriesController@edit')->name('categoryEditA');
	Route::get('/admin/categories/delete/{id}', 'Admin\CategoriesController@delete')->name('categoryDeleteA');
	//admin types
	Route::get('/admin/types', 'Admin\TypesController@index')->name('typeA');
	Route::get('/admin/types/create', 'Admin\TypesController@create')->name('typeCreateA');
	Route::post('/admin/types/store', 'Admin\TypesController@store')->name('typeStoreA');
	Route::get('/admin/types/edit/{id}', 'Admin\TypesController@edit')->name('typeEditA');
	Route::get('/admin/types/delete/{id}', 'Admin\TypesController@delete')->name('typeDeleteA');
	//admin events
	Route::get('/admin/events', 'Admin\EventsController@index')->name('eventA');
	Route::get('/admin/events/create', 'Admin\EventsController@create')->name('eventCreateA');
	Route::post('/admin/events/store', 'Admin\EventsController@store')->name('eventStoreA');
	Route::get('/admin/events/edit/{id}', 'Admin\EventsController@edit')->name('eventEditA');
	Route::get('/admin/events/delete/{id}', 'Admin\EventsController@delete')->name('eventDeleteA');
// admin routes [end]
