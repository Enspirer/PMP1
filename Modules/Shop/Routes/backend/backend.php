<?php

Route::get('invoice/show', 'InvoiceController@index')->name('invoice.index');

Route::get('products/index', 'ProductController@index')->name('product.index');
Route::get('products/show/{id}', 'ProductController@index')->name('product.show');