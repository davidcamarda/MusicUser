<?php

/*
|--------------------------------------------------------------------------
    | Application Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register all of the routes for an application.
    | It's a breeze. Simply tell Laravel the URIs it should respond to
    | and give it the Closure to execute when that URI is requested.
    |
    */

    Route::get('/', function() {
        return View::make('hello');
       // return 'What The Fuck';
    });

    Route::get('env', function () {

        return app()->env;

    });

    Route::get('shart', function () {
        
        return View::make('shart');
        
        });
