<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::any('/{any}', function() {
    return view('frontend');
})->where('any', '^(?!api).*$');
