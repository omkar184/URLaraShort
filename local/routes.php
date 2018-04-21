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

Route::get('/','HomeController@home');
Route::get('/about','AboutController@about');
Route::get('/projects','ProjectController@projects');
Route::get('/project-details','ProjectController@project_details');
Route::get('/contact','ContactController@contact');

Route::post('/insert-enquiry','EnquiryController@insert_enquiry');