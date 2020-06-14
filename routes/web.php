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
    return view('layouts/layout');
});


//Owner routes

Route::get('/owners', 'OwnerController@index')->name('owners.index');

Route::get('/owners/search', 'OwnerController@search')->name('owners.search');

Route::get('/owners/{owner_id}', 'OwnerController@show')->where('owner_id', '[0-9]+');
Route::get('/owners/{owner_id}/edit', 'OwnerController@edit')->name('owners.edit');
Route::get('/owners/create',         'OwnerController@create')->name('owners.create');
Route::post('/owners',               'OwnerController@store')->name('owners.store');
Route::get('/owners/{owner_id}/edit', 'OwnerController@edit')->name('owners.edit');
Route::put('/owners/{owner_id}',     'OwnerController@update')->name('owners.update');

//Animal routes

Route::get('/animals', 'AnimalController@index')->name('animals.index');
Route::put('/animals/search', 'AnimalController@search')->name('animals.search');

Route::get('/animals/{animal_id}', 'AnimalController@show')->where('animal_id', '[0-9]+');

Route::get('/animals/create',         'AnimalController@create')->name('animals.create');
Route::post('/animals',               'AnimalController@store')->name('animals.store');
Route::get('/animals/{animal_id}/edit', 'AnimalController@edit')->name('animals.edit');
Route::put('/animals/{animal_id}',     'AnimalController@update')->name('animals.update');

//Doctor routes

Route::get('/doctors', 'DoctorController@index')->name('doctors.index');

//Visits routes

Route::get('/visits', 'VisitController@index')->name('visits.index');
Route::get('/visits/{animal_id}', 'VisitController@show')->name('visits.show')->where('animal_id', '[0-9]+');
Route::get('/visits/{animal_id}/new', 'VisitController@new')->name('visits.new')->where('animal_id', '[0-9]+');
Route::post('/visits/create', 'VisitController@create')->name('visits.create');