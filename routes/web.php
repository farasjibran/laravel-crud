<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'BlogController@index')->name('home');
Route::get('/detail/{id}', 'HomeController@detail')->name('detail');
Route::get('/create', 'BlogController@create')->name('create');
Route::get('/destroy/{id}', 'BlogController@destroy')->name('destroy');
Route::get('/edit/{id}', 'BlogController@edit')->name('edit');
Route::post('/update/{id}', 'BlogController@update')->name('update');
Route::post('/store', 'BlogController@store')->name('store');
