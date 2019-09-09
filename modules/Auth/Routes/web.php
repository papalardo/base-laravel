<?php

Route::prefix('auth')->name('auth.')->group(function() {
    Route::get('/', 'AuthController@index')->name('login.form');

    Route::namespace('Admin')->prefix('admin')->group(function() {
        Route::post('/', 'LoginController@login')->name('login');
    });
});