<?php

Route::get('/consulting_requests', 'ConsultingController@index')->name('consulting_request.list');
Route::get('/consulting_requests_json', 'ConsultingController@GetTableDetails')->name('consulting_request.get_table_details');
