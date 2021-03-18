<?php

/*
* Frontend Prefix: blog
* Author: Enspirer
* Description: Blog Modules,
*/


Route::get('/', 'ShopController@index');
Route::get('item', 'ShopController@item')->name('item');
