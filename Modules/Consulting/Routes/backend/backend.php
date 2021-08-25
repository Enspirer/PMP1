<?php

Route::get('/consulting_requests', 'ConsultingController@index')->name('consulting_request.list');
Route::get('/consulting_requests_json', 'ConsultingController@GetTableDetails')->name('consulting_request.get_table_details');
Route::get('/consulitng_req/show/{id}', 'ConsultingController@show')->name('consulting_request.show');
Route::post('/consulitng_req/update', 'ConsultingController@update')->name('consulting_request.update');
