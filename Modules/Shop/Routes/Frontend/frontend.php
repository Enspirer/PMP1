<?php

/*
* Frontend Prefix: blog
* Author: Enspirer
* Description: Blog Modules,
*/


Route::get('/', 'ShopController@index')->name('shop.index');
Route::get('item', 'ShopController@item')->name('shop.item');
