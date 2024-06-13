<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
    return view('landing.index');
});

Route::get('/about', function () {
	return view('landing.about');
});

Route::get('/contact', function () {
	return view('landing.contact');
});
// Route::get('/', function () {
//     return view('landing.about');
// });

// Route::get('/', function () {
//     return view('landing.contact');
// });
