<?php

Route::get('/', 'ProjectController@index')->name('projects');
Route::get('/page/{id}', 'ProjectController@show')->name('project_page');