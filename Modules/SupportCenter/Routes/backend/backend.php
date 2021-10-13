<?php

Route::get('contact-us/leads', 'ContactUsController@index')->name('contact_us.index');
Route::get('contact-us/leads-view/{id}', 'ContactUsController@show')->name('contact_us.show');
Route::get('contact-us/leads-details', 'ContactUsController@GetTableDetails')->name('contact_us.get_table_details');
Route::post('contact-us/update', 'ContactUsController@update')->name('contact_us.update');

Route::get('email-subscription', 'EmailSubscriptionController@index')->name('email_subscription.index');
Route::get('get-email-subscription', 'EmailSubscriptionController@getEmailSubscriptions')->name('email_subscription.get_email_subscriptions');
Route::get('email-subscriptions/delete/{id}', 'EmailSubscriptionController@deleteEmailSubscription')->name('email_subscription.delete_email_subscription');
