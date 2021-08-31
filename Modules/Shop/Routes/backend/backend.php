<?php

Route::get('eshop_products/index', 'EshopProductController@index')->name('eshop_products.index');
Route::get('eshop_products/getDetails', 'EshopProductController@GetTableDetails')->name('eshop_products.GetTableDetails');
Route::get('eshop_products/create', 'EshopProductController@create')->name('eshop_products.create');
Route::post('eshop_products/store', 'EshopProductController@store')->name('eshop_products.store');
Route::get('eshop_products/edit/{id}', 'EshopProductController@edit')->name('eshop_products.edit');
Route::post('eshop_products/update', 'EshopProductController@update')->name('eshop_products.update');
Route::get('eshop_products/delete/{id}', 'EshopProductController@destroy')->name('eshop_products.destroy');