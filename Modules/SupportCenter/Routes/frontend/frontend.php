<?php

Route::get('/contact-us', 'FrontendController@index')->name('contact_us');
Route::get('/bacome-a-partner', 'PartnerController@index')->name('become_a_partner');
Route::post('/save-contact-leeds', 'FrontendController@store')->name('contact_us.store');
