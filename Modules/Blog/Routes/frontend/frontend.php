<?php

    /*
    * Frontend Prefix: blog
    * Author: Enspirer
    * Description: Blog Modules,
    */


    Route::get('/', 'BlogController@index');
    Route::get('blog_post', 'BlogController@blog_post')->name('blog_post');
