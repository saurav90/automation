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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@index');
Route::resource('/create-suite-model', 'SuiteController');
Route::get('/view-suite-model', 'SuiteController@suiteModelList');
Route::get('/create-suite', 'SuiteController@createSuite');
Route::get('/view-suites', 'SuiteController@suiteList');

