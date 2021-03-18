<?php

    /*
    * Frontend Prefix: blog
    * Author: Enspirer
    * Description: Blog Modules,
    */


    Route::get('/{category_name}', 'BlogController@index')->name('blog');
    Route::get('blog_post/{slug}', 'BlogController@blog_post')->name('blog_post');
