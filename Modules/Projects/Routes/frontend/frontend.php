<?php

Route::get('/page/{id}', 'ProjectController@show')->name('project_page');
Route::get('/explore-project/{category_id}/{search_keyword}/{county}/{bids_range}/{sort_by}', 'ProjectController@index')->name('project_explore');
