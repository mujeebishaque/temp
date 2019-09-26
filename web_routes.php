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

Route::get ('/', 'TodosController@welcome')
->name('welcome');
Route::get ('/index', 'TodosController@index')
->name('index');
Route::get ('/remove/{id}', 'TodosController@remove')
->name('remove');
Route::get ('/create', function () { return view('create'); });
Route::post('/store', 'TodosController@store')
->name('store');
Route::get ('/update/{id}', 'TodosController@update')
->name('update');
Route::post('/save/{id}', 'TodosController@save')
->name('save');
Route::get ('/completed/{id}', 'TodosController@complete')
->name('complete');


