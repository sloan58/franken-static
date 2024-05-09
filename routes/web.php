<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logger', function() {
    info('logging!');
    return response()->json('success');
});
