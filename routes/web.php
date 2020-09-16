<?php

/*
|--------------------------------------------------------------------------
| One to One
|--------------------------------------------------------------------------
*/

Route::get('/one-to-one/countries', 'OneToOneController@index');
Route::get('/one-to-one/country/{id}', 'OneToOneController@show');
Route::get('/one-to-one-insert', 'OneToOneController@new');
Route::get('/one-to-one/country_name/{name}', 'OneToOneController@busca_country');

Route::get('/one-to-one-inverse/latitude/{latitude}', 'OneToOneController@busca_latitude');
Route::get('/one-to-one-inverse/longitude/{longitude}', 'OneToOneController@busca_longitude');

/*
|--------------------------------------------------------------------------
| One to Many
|--------------------------------------------------------------------------
*/

Route::get('/one-to-many/states/{id?}', 'OneToManyController@index'); # busca de Estados pelo id do País
Route::get('/one-to-many/state/{id}', 'OneToManyController@show'); # busca de Estado por id
Route::get('/one-to-many/city_name/{name}', 'OneToManyController@busca_city'); # busca de Estado por nome
Route::get('/one-to-many/states/str/{string}', 'OneToManyController@states_like'); # busca de estados por uma string
Route::get('/one-to-many/cities/str/{string}', 'OneToManyController@cities_like'); # busca de cidades por uma string
Route::get('/one-to-many-insert', 'OneToManyController@new');

Route::get('/one-to-many-inverse/state/{id}', 'OneToManyController@busca_state');

/*
|--------------------------------------------------------------------------
| One to Many Through
|--------------------------------------------------------------------------
*/

Route::get('/one-to-many-through/cities/{id?}', 'OneToManyThroughController@index'); # todas cidades de um país

/*
|--------------------------------------------------------------------------
| Many to Many
|--------------------------------------------------------------------------
*/

Route::get('/many-to-many/cities/{name?}', 'ManyToManyController@index'); # empresas existentes na cidade
Route::get('/many-to-many-inverse/companies/{name?}', 'ManyToManyController@busca_company'); # cidades onde existe a empresa
Route::get('/many-to-many-insert', 'ManyToManyController@new'); # Insere cidade(s) em uma empresa
Route::get('/many-to-many-delete', 'ManyToManyController@delete'); # Exclui cidade(s) em uma empresa

/*
|--------------------------------------------------------------------------
| Polymorphic
|--------------------------------------------------------------------------
*/

Route::get('/polymorphics', 'PolymorphicController@index');
Route::get('/polymorphics-insert-city', 'PolymorphicController@comment_city');
Route::get('/polymorphics-insert-state', 'PolymorphicController@comment_state');
Route::get('/polymorphics-insert-country', 'PolymorphicController@comment_country');

Route::get('/polymorphics-show-city/{name?}', 'PolymorphicController@show_comments_city');
Route::get('/polymorphics-show-state/{name?}', 'PolymorphicController@show_comments_state');
Route::get('/polymorphics-show-country/{name?}', 'PolymorphicController@show_comments_country');


