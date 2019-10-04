#<?php

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

Route::get('/home', 'EnrolController@index');
Route::get('/home/subjects', 'EnrolController@subject');
Route::get('/home/sections', 'SectionsController@section');
Route::get('/home/teachers', 'TeachersController@teacher');
Route::get('/home/strands', 'StrandsController@strand');
Route::get('/home/subjects/add', 'EnrolController@create');
Route::get('/home/sections/add', 'SectionsController@create');
Route::get('/home/teachers/add', 'TeachersController@create');
Route::get('/home/strands/add', 'StrandsController@create');
Route::post('/home/subjects/store', 'EnrolController@store');
Route::post('/home/sections/store', 'SectionsController@store');
Route::post('/home/teachers/store', 'TeachersController@store');
Route::post('/home/strands/store', 'StrandsController@store');