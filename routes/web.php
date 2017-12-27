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

Route::get('/','HomeController@index');

Route::get('/hash/password', function () {
    return Hash::make('admin123');
});

Route::group(['prefix'=>'adminpanel'],function(){
	Route::get('/','Auth\LoginController@showLoginForm')->name('view.login');
	Route::post('/login','Auth\LoginController@login')->name('post.login');

	Route::group(['middleware'=>'auth'],function(){
		Route::get('/logout','Auth\LoginController@logout')->name('get.logout');

		Route::group(['prefix'=>'agenda'],function(){
			Route::get('/','AgendaController@index')->name('view.agenda');	
			Route::get('/add','AgendaController@add')->name('add.agenda');				
			Route::post('/add','AgendaController@store')->name('store.agenda');	
			
		});
		
	});
	
});
// Auth::routes();
Route::get('/download','AgendaController@download')->name('download.agenda');	
Route::get('/home', 'HomeController@index')->name('home');
//Beda