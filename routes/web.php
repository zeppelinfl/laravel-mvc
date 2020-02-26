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
	// search
	Route::post('/search', 'SearchesController@index')->name('searchF');
// home routes [end]
Auth::routes();
// admin routes [start]
Route::namespace('Admin')->group(function () {
	Route::get('/admin', 'HomeController@index')->name('admin');
	Route::prefix('admin')->group(function () {
		//admin contacts
		Route::get('/contacts', 'ContactsController@index')->name('contactA');
		Route::get('/contacts/create', 'ContactsController@create')->name('contactCreateA');
		Route::post('/contacts/store', 'ContactsController@store')->name('contactStoreA');
		Route::get('/contacts/edit/{id}', 'ContactsController@edit')->name('contactEditA');
		Route::get('/contacts/view/{id}', 'ContactsController@view')->name('contactViewA');
		Route::get('/contacts/delete/{id}', 'ContactsController@delete')->name('contactDeleteA');	    
		//admin countries
		Route::get('/countries', 'CountriesController@index')->name('countryA');
		Route::get('/countries/create', 'CountriesController@create')->name('countryCreateA');
		Route::post('/countries/store', 'CountriesController@store')->name('countryStoreA');
		Route::get('/countries/edit/{id}', 'CountriesController@edit')->name('countryEditA');
		Route::get('/countries/view/{id}', 'CountriesController@view')->name('countryViewA');
		Route::get('/countries/delete/{id}', 'CountriesController@delete')->name('countryDeleteA');
		//admin cities
		Route::get('/cities', 'CitiesController@index')->name('cityA');
		Route::get('/cities/create', 'CitiesController@create')->name('cityCreateA');
		Route::post('/cities/store', 'CitiesController@store')->name('cityStoreA');
		Route::get('/cities/edit/{id}', 'CitiesController@edit')->name('cityEditA');
		Route::get('/cities/view/{id}', 'CitiesController@view')->name('cityViewA');
		Route::get('/cities/delete/{id}', 'CitiesController@delete')->name('cityDeleteA');
		//admin categories
		Route::get('/categories', 'CategoriesController@index')->name('categoryA');
		Route::get('/categories/create', 'CategoriesController@create')->name('categoryCreateA');
		Route::post('/categories/store', 'CategoriesController@store')->name('categoryStoreA');
		Route::get('/categories/edit/{id}', 'CategoriesController@edit')->name('categoryEditA');
		Route::get('/categories/view/{id}', 'CategoriesController@view')->name('categoryViewA');
		Route::get('/categories/delete/{id}', 'CategoriesController@delete')->name('categoryDeleteA');
		//admin types
		Route::get('/types', 'TypesController@index')->name('typeA');
		Route::get('/types/create', 'TypesController@create')->name('typeCreateA');
		Route::post('/types/store', 'TypesController@store')->name('typeStoreA');
		Route::get('/types/edit/{id}', 'TypesController@edit')->name('typeEditA');
		Route::get('/types/view/{id}', 'TypesController@view')->name('typeViewA');
		Route::get('/types/delete/{id}', 'TypesController@delete')->name('typeDeleteA');
		//admin events
		Route::get('/events', 'EventsController@index')->name('eventA');
		Route::get('/events/create', 'EventsController@create')->name('eventCreateA');
		Route::post('/events/store', 'EventsController@store')->name('eventStoreA');
		Route::get('/events/edit/{id}', 'EventsController@edit')->name('eventEditA');
		Route::get('/events/view/{id}', 'EventsController@view')->name('eventViewA');
		Route::get('/events/delete/{id}', 'EventsController@delete')->name('eventDeleteA');
		//admin experiences
		Route::get('/experiences', 'ExperiencesController@index')->name('experienceA');
		Route::get('/experiences/create', 'ExperiencesController@create')->name('experienceCreateA');
		Route::post('/experiences/store', 'ExperiencesController@store')->name('experienceStoreA');
		Route::get('/experiences/edit/{id}', 'ExperiencesController@edit')->name('experienceEditA');
		Route::get('/experiences/view/{id}', 'ExperiencesController@view')->name('experienceViewA');
		Route::get('/experiences/delete/{id}', 'ExperiencesController@delete')->name('experienceDeleteA');
		//admin places
		Route::get('/places', 'PlacesController@index')->name('placeA');
		Route::get('/places/create', 'PlacesController@create')->name('placeCreateA');
		Route::post('/places/store', 'PlacesController@store')->name('placeStoreA');
		Route::get('/places/edit/{id}', 'PlacesController@edit')->name('placeEditA');
		Route::get('/places/view/{id}', 'PlacesController@view')->name('placeViewA');
		Route::get('/places/delete/{id}', 'PlacesController@delete')->name('placeDeleteA');
		//admin subcategories
		Route::get('/subcategories', 'SubcategoriesController@index')->name('subcategoryA');
		Route::get('/subcategories/create', 'SubcategoriesController@create')->name('subcategoryCreateA');
		Route::post('/subcategories/store', 'SubcategoriesController@store')->name('subcategoryStoreA');
		Route::get('/subcategories/edit/{id}', 'SubcategoriesController@edit')->name('subcategoryEditA');
		Route::get('/subcategories/view/{id}', 'SubcategoriesController@view')->name('subcategoryViewA');
		Route::get('/subcategories/delete/{id}', 'SubcategoriesController@delete')->name('subcategoryDeleteA');
		//admin reviews
		Route::get('/reviews', 'ReviewsController@index')->name('reviewA');
		Route::get('/reviews/create', 'ReviewsController@create')->name('reviewCreateA');
		Route::post('/reviews/store', 'ReviewsController@store')->name('reviewStoreA');
		Route::get('/reviews/edit/{id}', 'ReviewsController@edit')->name('reviewEditA');
		Route::get('/reviews/view/{id}', 'ReviewsController@view')->name('reviewViewA');
		Route::get('/reviews/delete/{id}', 'ReviewsController@delete')->name('reviewDeleteA');
		//admin pages
		Route::get('/pages', 'PagesController@index')->name('pageA');
		Route::get('/pages/create', 'PagesController@create')->name('pageCreateA');
		Route::post('/pages/store', 'PagesController@store')->name('pageStoreA');
		Route::get('/pages/edit/{id}', 'PagesController@edit')->name('pageEditA');
		Route::get('/pages/view/{id}', 'PagesController@view')->name('pageViewA');
		Route::get('/pages/delete/{id}', 'PagesController@delete')->name('pageDeleteA');
	});
});
// admin routes [end]
