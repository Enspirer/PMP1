<?php

Route::get('contact-us/leads', 'ContactUsController@index')->name('contact_us.index');
Route::get('contact-us/leads-view/{id}', 'ContactUsController@show')->name('contact_us.show');
Route::get('contact-us/leads-details', 'ContactUsController@GetTableDetails')->name('contact_us.get_table_details');
