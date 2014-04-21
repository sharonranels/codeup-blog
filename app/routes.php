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


/* Uncomment to Log Eloquent Queries */
// Event::listen('illuminate.query', function($sql, $bindings, $time){
//   Log::info($sql);
//   Log::info(implode($bindings, ', '));
// });

Route::get('/', 'HomeController@showHome');

// Route::resource('createuser', 'UserController');

Route::get('/login', 'HomeController@showLogin');
Route::post('/login', 'HomeController@doLogin');

Route::get('/logout', 'HomeController@logout');

// Route::get('orm-test', function () {
// 	$post1 = new Post();
// 	$post1->title = "title 2";
// 	$post1->body = "This is body 2";
// 	$post1->save();


// });


Route::get('post-test', function () {
	
	$user = User::first();
	$post = new Post();
	$post->user_id = $user->id;
	$post->title = "title 2";
	$post->body = "This is body 2";
	$post->save();


});


Route::get('/home', 'HomeController@showHome');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::resource('posts', 'PostsController');

Route::resource('users', 'UserController');
