<?php

Route::get('/page/{id}', 'ProjectController@show')->name('project_page');
Route::get('/explore-project/{category_id}/{search_keyword}/{county}/{bids_range}/{sort_by}', 'ProjectController@index')->name('project_explore');
Route::get('/apply-project/{project_id}', 'ProjectController@apply_project')->name('apply_project');

Route::get('/auction-projects', 'ProjectAuctionController@explore')->name('project_auctions_explore');
Route::get('/auction-project/{project_id}', 'ProjectAuctionController@index')->name('project_auction');
Route::get('/expert-center', 'ExpertCenterController@index')->name('expert_center');
