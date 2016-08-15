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
//Routes to Auth: 
Route::group(['prefix' => 'auth'], function(){
	Route::post('getToken', 'AuthenticationController@getToken'); 
}); 

//Routes to users; 
Route::group(['prefix' => 'u'], function(){
	Route::post('create', 'UserController@create'); 
}); 

//Routes to categories: 
Route::group(['prefix' => 'c'], function(){
	Route::post('getCategories'   , 'CategoryController@getAllCategories'); 
	Route::post('getSubCategories', "CategoryController@getSubCategories"); 
}); 	

//Routes to skill: 
Route::group(['prefix' => 's'], function(){
	Route::post('getSkillsByCategory', 'SkillController@getSkillByCategory');
	Route::post('getSkillsByMatch', 'SkillController@getSkillsByMatch'); 
}); 