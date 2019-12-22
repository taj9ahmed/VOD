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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/films/index', 'FilmController@index');    // /film/add_fav


Route::get('/lists/index', 'List1Controller@index');//correct TO @FIND($USER->ID)

Route::get('/lists/newList', 'List1Controller@create'); ///createList

Route::get('/lists/insertList', 'List1Controller@insert'); ///list/add_list

Route::get('/lists/add_list', 'List1Controller@index');

Route::get('/lists/selectList', 'List1Controller@add2List'); //

Route::get('/lists/editList1', 'List1Controller@eindex');//function

Route::get('/list/listDetails', 'List1Controller@show');