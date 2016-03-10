<?php

Route::group(['middleware' => 'web'], function () {

	/** 
	  * Static pages
	  */ 
	Route::get('/', [
		'uses' => 'PagesController@showIndex',					// show home page
		'as' => 'home'
	]);															
	Route::get('/contact', 'PagesController@showContact');		// show contact page
	Route::get('/ask', 'PagesController@showAsk');				// show ask page
	Route::get('/questions', [
		'uses' => 'PagesController@showQuestions',
		'as' => 'show.all' 
	]); 	

	/**
	  * Administration
	  */
	Route::get('/admin', [
		'uses' => 'Admin\AdminController@getAdminCP',
		'as' => 'admin.panel'
	]);

	Route::get('/admin/users', [
		'uses' => 'Admin\AdminController@getUsers',
		'as' => 'admin.users'
	]);

	/** 
	  * Authentication
	  */ 
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

	/** 
	  * Search
	  */ 
	Route::get('/search', [
		'uses' => 'Search\SearchController@getResults',
		'as' => 'search.results',
	]);	// show results page

	/** 
	  * Profiles
	  */ 
	Route::get('/user/{username}', [
		'uses' => 'Profile\ProfileController@getProfile',
		'as' => 'profile.index',
	]);

	Route::get('/profile/edit', [
		'uses' => 'Profile\ProfileController@getEdit',
		'as' => 'profile.edit',
		'middleware' => ['auth'],
	]);

	Route::post('/profile/edit', [
		'uses' => 'Profile\ProfileController@postEdit',
		'middleware' => ['auth'],
	]);

	/**
	 * Posting
	 */
	Route::post('/post', [
		'uses' => 'Posts\PostController@postQuestion',
		'as' => 'question.post',
		'middleware' => ['auth'],
	]);

	Route::get('/post/{id}', [
		'uses' => 'Posts\PostController@showQuestion',
		'as' => 'post.show',
		'middleware' => ['auth'],
	]);

	Route::post('/post/{id}/reply', [
		'uses' => 'Posts\PostController@postReply',
		'as' => 'question.reply',
		'middleware' => ['auth'],
	]);

	Route::get('/post/{id}/like', [
		'uses' => 'Posts\PostController@getLike',
		'as' => 'question.like',
		'middleware' => ['auth'],
	]);

	Route::get('/post/{id}/delete', [
		'uses'=> 'Posts\PostController@deletePostOrReply',
		'as' => 'post.delete',
		'middleware' => ['auth'],
	]);
});
