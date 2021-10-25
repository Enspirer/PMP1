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

Route::get('project_leeds/index', 'ProjectLeedsController@index')->name('project_leeds.index');
Route::get('project_leeds/getDetails', 'ProjectLeedsController@GetTableDetails')->name('project_leeds.GetTableDetails');
Route::get('project_leeds/edit/{id}', 'ProjectLeedsController@edit')->name('project_leeds.edit');
Route::post('project_leeds/update', 'ProjectLeedsController@update')->name('project_leeds.update');
Route::get('project_leeds/delete/{id}', 'ProjectLeedsController@destroy')->name('project_leeds.destroy');