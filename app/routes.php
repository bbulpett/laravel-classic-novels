<?php
/*** OLD WAY USING SCHEMA BUILDER (FROM THE LYNDA TUTORIAL) ***/
// Route::get('/', function()
// {
// 	// $collection = Novel::all();
// 	// $collection->each(function($novel)
// 	// {
// 	// 	var_dump($novel->title);
// 	// });
// 	return View::make('index');

// 	// $novel = Novel::find(1);
// 	// echo nl2br($novel->synopsis);
// });

/*** BETTER WAY - RESTful ***/
Route::resource('novels', 'NovelsController');

Route::get('/', 'NovelsController@index');

Route::post('create', array('uses' => 'NovelsController@create')); 
Route::post('update', array('uses' => 'NovelsController@update')); 
Route::post('store', array('store' => 'NovelsController@store')); 



// Confide routes
Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');
Route::get('users/login', 'UsersController@login');
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('users/logout', 'UsersController@logout');

// Dashboard route 
Route::get('userpanel/dashboard', function(){ return View::make('userpanel.dashboard'); }); 
 
// Applies auth filter to the routes within admin/ 
Route::when('userpanel/*', 'auth');


Route::get('{id}', array('uses' => 'NovelsController@show'));
Route::post('{id}', array('uses' => 'NovelsController@show'));
