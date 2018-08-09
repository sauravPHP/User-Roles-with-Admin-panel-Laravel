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


/**
 * Admin routes
 */
Route::group(['prefix' => 'admin',  'middleware' => ['auth','admin']], function() {
	Route::get('/', 'HomeController@admin')->name('admin');
	Route::group(['prefix' => 'roles'], function() {
		Route::get('/', 'RoleController@index')->name('roles');
		Route::get('/create', 'RoleController@create')->name('roles.create');
		Route::post('/store', 'RoleController@store')->name('roles.store');
		Route::get('/edit/{id}', 'RoleController@edit')->name('roles.edit');
		Route::post('/update/{id}', 'RoleController@update')->name('roles.update');
		Route::get('/delete/{id}', 'RoleController@delete')->name('roles.delete');
	});
	Route::group(['prefix' => 'users'], function() {
		Route::get('/', 'UserController@index')->name('users');
		Route::get('/create', 'UserController@create')->name('users.create');
		Route::post('/store', 'UserController@store')->name('users.store');
		Route::get('/edit/{id}', 'UserController@edit')->name('users.edit');
		Route::post('/update/{id}', 'UserController@update')->name('users.update');
		Route::get('/delete/{id}', 'UserController@delete')->name('users.delete');
	});
});

