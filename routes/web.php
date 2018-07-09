<?php

    Route::get('/', 'NewsController@index')->name('site.index');
    Route::get('news/{url}', 'NewsController@views')->name('news.views')->where('url', '[\w\d\-\_]+');
    Route::get('author/{url}', 'NewsController@views')->name('author.views')->where('url', '[\w\d\-\_]+');
    Route::get('categories/{url}', 'CategoryController@views')->name('categories.views')->where('url', '[\w\d\-\_]+');
    Route::get('tag/{url}', 'NewsController@views')->name('tag.views')->where('url', '[\w\d\-\_]+');
    Route::get('about-us', 'SiteController@aboutus')->name('site.about-us');
    Route::get('rules', 'SiteController@rules')->name('site.rules');
    Route::get('athletes', 'SiteController@athletes')->name('site.athletes');
    Route::get('photo-gallery', 'SiteController@photogallery')->name('site.photo-gallery');
    Route::get('write-to-us', 'SiteController@writetous')->name('site.write-to-us');
    Route::get('profile', 'SiteController@writetous')->name('site.write-to-us');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
