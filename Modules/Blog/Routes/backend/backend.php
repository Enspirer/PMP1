<?php

/*
* Frontend Prefix: blog
* Author: Enspirer
* Description: Blog Modules,
*/



Route::get('blog_category/index', 'BlogCategoryController@index')->name('blog_category.index');
Route::get('blog_category/create', 'BlogCategoryController@create')->name('blog_category.create');
Route::get('blog_category/show/{id}', 'BlogCategoryController@show')->name('blog_category.show');
Route::get('blog_category/category_details', 'BlogCategoryController@GetTableDetails')->name('blog_category.get_category_details');
Route::post('blog_category/store', 'BlogCategoryController@store')->name('blog_category.store');
Route::post('blog_category/update', 'BlogCategoryController@update')->name('blog_category.update');
Route::get('blog_category/destroy/{id}', 'BlogCategoryController@destroy')->name('blog_category.destroy');

Route::get('blog_post/index', 'BlogPostController@index')->name('blog_post.index');
Route::get('blog_post/create', 'BlogPostController@create')->name('blog_post.create');
Route::get('blog_post/post_details', 'BlogPostController@GetTableDetails')->name('blog_post.get_post_details');
Route::post('blog_post/store', 'BlogPostController@store')->name('blog_post.store');
Route::get('blog_post/show/{id}', 'BlogPostController@show')->name('blog_post.show');
Route::get('blog_post/destroy/{id}', 'BlogPostController@destroy')->name('blog_post.destroy');
