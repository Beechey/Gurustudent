<?php

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/contact', function() {
	return view('pages.contact');
});