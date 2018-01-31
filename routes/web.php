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

Route::get('/', function () {
   return App::version();
});

Route::group(['prefix' => 'api'], function () {

//login 
Route::post('/login','UsersController@login');

//logout
Route::get('/logout','UsersController@logout');
//register
Route::post('/register','UsersController@register');

//update profile
Route::post('/profile','UsersController@updateProfile');

//store result
Route::post('/result','ResultController@storeResult');

//questions and answers
Route::get('/allquestions','QuestionController@allQuestions');

});