<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/chi-sono', function () {
    return view('chi-sono');
});

Route::get('/contatti', function () {
    return view('contatti');
});