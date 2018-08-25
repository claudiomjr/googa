<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',['as'=>'/','uses'=>'AirdropController@register']);
// Route::get('google', function () {

//     return view('google');

// });
Route::group(['prefix'=>'airdrops','as'=>'airdrops.'], function(){
	Route::get('/',['as'=>'/','uses'=>'AirdropController@index']);
	Route::get('/index',['as'=>'index','uses'=>'AirdropController@index']);
	Route::get('register',['as'=>'register','uses'=>'AirdropController@register']);
	Route::post('register',['as'=>'register','uses'=>'AirdropController@register']);
  });

// Route::group(['prefix'=>'airdrops','as'=>'airdrops.'],function(){
// 	Route::get('/',['as'=>'/'],['uses'=>'AirdropController@index']);
// 	Route::get('/index',['as'=>'index'],['uses'=>'AirdropController@index']);
// 	Route::get('register',['as'=>'register'],['uses'=>'AirdropController@register']);
// 	Route::post('register',['as'=>'register'],['uses'=>'AirdropController@register']);
// });

// Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');

// Route::get('auth/google/callback','Auth\GoogleController@handleGoogleCallback');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
