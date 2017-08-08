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

Route::get('/', [
    'uses' => 'DefaultController@indexAction',
    'as' => 'irunerrands.index'
]);
Route::get('/about', [
    'uses' => 'DefaultController@aboutAction',
    'as' => 'irunerrands.about'
]);
Route::get('/services', [
    'uses' => 'DefaultController@servicesAction',
    'as' => 'irunerrands.services'
]);
Route::get('/rates/{rate?}', [
    'uses' => 'DefaultController@ratesAction',
    'as' => 'irunerrands.rates'
]);
Route::get('/contacts', [
    'uses' => 'DefaultController@contactsAction',
    'as' => 'irunerrands.contacts'
]);
//Route::get('/', function () {
//    return view('welcome');
//});
