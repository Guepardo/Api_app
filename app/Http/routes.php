<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function(){
	return "working"; 
}); 

//Routes to users; 
Route::group(['prefix' => 'u'], function(){
	Route::post('create', 'UserController@create'); 
}); 


//Routes to categories: 
Route::group(['prefix' => 'c'], function(){
	Route::get('getCategories', 'CategoryController@getAllCategories'); 
}); 	