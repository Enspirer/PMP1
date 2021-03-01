<?php

Route::get('contact-us/leads', 'ContactUsController@index')->name('contact_us.index');

Route::get('contact-us/leads-details', 'ContactUsController@GetTableDetails')->name('contact_us.get_table_details');
