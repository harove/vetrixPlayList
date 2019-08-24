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

Route::get('pages-blank','HeroeController@index')->name('pages-blank');


Route::post('persistPlaylist','PlaylistController@store')->name('persistPlaylist');





Route::group(['prefix' => 'admin'], function(){
    
    Route::group(['prefix' => 'heroes'], function(){
        
        Route::get('/','AdminController@index');
        Route::get('create','HeroeController@create')->name('admin.heroes.create');
        Route::post('store','HeroeController@store')->name('admin.heroes.store');
        Route::get('edit/{id}','HeroeController@edit')->name('admin.heroes.edit');
        Route::post('update/{id}','HeroeController@update')->name('admin.heroes.update');
    });

    Route::get('enemigos','EnemigoController@index')->name('admin.enemigos');
    Route::get('items','ItemsController@index')->name('admin.items');
});




Route::get('/', function () {
    return view('index');
});


Route::get('{any}', 'HeroeController@index');
