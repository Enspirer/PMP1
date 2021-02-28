<?php

Route::get('/contact-us', 'FrontendController@index')->name('contact_us');
Route::post('/save-contact-leeds', 'FrontendController@store')->name('contact_us.store');
