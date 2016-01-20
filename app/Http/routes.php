<?php

Route::group(['middleware' => 'web'], function () {
	// Static

	Route::get('/', [
		'uses' => 'PagesController@showIndex',					// show home page
		'as' => 'home'
	]);															
	Route::get('/contact', 'PagesController@showContact');		// show contact page
	Route::get('/ask', 'PagesController@showAsk');				// show ask page
	Route::get('/questions', 'PagesController@showQuestions'); 	// show questions page
	Route::get('/dashboard', [
		'uses' => 'PagesController@showDashboard',
		'as' => 'dashboard',
	]);

	// Authentication

    Route::auth();

	Route::get('/register', [
		'uses' => 'Auth\AuthController@showRegistrationForm',
		'as' => 'auth.register',
		'middleware' => ['guest'],
	]);	// show register page
    Route::post('/register', [
		'uses' => 'Auth\AuthController@postSignup',
		'middleware' => ['guest'],
	]);	// show register page
	Route::get('/login', [
		'uses' => 'Auth\AuthController@showLoginForm',
		'as' => 'auth.login',
		'middleware' => ['guest'],
	]); // show login page
	Route::post('/login', [
		'uses' => 'Auth\AuthController@postLogin',
		'middleware' => ['guest'],
	]);
});
