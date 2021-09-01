<?php

Route::get('project_category/index', 'CategoryController@index')->name('project_category.index');
Route::get('project_category/getDetails', 'CategoryController@GetTableDetails')->name('project_category.GetTableDetails');
Route::post('project_category/store', 'CategoryController@store')->name('project_category.store');
Route::get('project_category/edit/{id}', 'CategoryController@edit')->name('project_category.edit');
Route::post('project_category/update', 'CategoryController@update')->name('project_category.update');
Route::get('project_category/delete/{id}', 'CategoryController@destroy')->name('project_category.destroy');

Route::get('tallents/index', 'TallentsController@index')->name('tallents.index');
Route::get('tallents/create', 'TallentsController@create')->name('tallents.create');
Route::get('tallents/getDetails', 'TallentsController@GetTableDetails')->name('tallents.GetTableDetails');
Route::post('tallents/store', 'TallentsController@store')->name('tallents.store');
Route::get('tallents/edit/{id}', 'TallentsController@edit')->name('tallents.edit');
Route::post('tallents/update', 'TallentsController@update')->name('tallents.update');
Route::get('tallents/delete/{id}', 'TallentsController@destroy')->name('tallents.destroy');