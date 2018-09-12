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
    return view('welcome');
});

Route::post('/signup','UserController@store');

/*CompanyController*/
Route::get('/company','CompanyController@index');
Route::post('/company','CompanyController@store');
Route::get('/company/{id}','CompanyController@show');
Route::put('/company','CompanyController@update');
Route::delete('/company/{id}','CompanyController@destroy');

/*PageController*/
Route::get('/page','PageController@index');
Route::post('/page','PageController@store');
Route::get('/page/{id}','PageController@show');
Route::put('/page','PageController@update');
Route::delete('/page/{id}','PageController@destroy');

/*KeywordController*/
Route::get('/keyword','KeywordController@index');
Route::post('/keyword','KeywordController@store');
Route::get('/keyword/{id}','KeywordController@show');
Route::put('/keyword','KeywordController@update');
Route::delete('/keyword/{id}','KeywordController@destroy');

/*DescriptionController*/
Route::get('/description','DescriptionController@index');
Route::post('/description','DescriptionController@store');
Route::get('/description/{id}','DescriptionController@show');
Route::put('/description','DescriptionController@update');
Route::delete('/description/{id}','DescriptionController@destroy');