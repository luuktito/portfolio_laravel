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

//Route::get('/', function () {
//    $people = ['Taylor', 'Matt', 'Jeffrey'];
////    return view('welcome');
//    return view('welcome', compact('people'));
//});

Route::get('/', 'PagesController@home');
Route::get('home', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('cv', 'PagesController@cv');
Route::get('projects', 'PagesController@projects');
Route::get('school', 'PagesController@school');
Route::get('school2', 'PagesController@school2');
Route::get('school3', 'PagesController@school3');
Route::get('school4', 'PagesController@school4');
Route::get('contact', 'PagesController@contact');

//Route::get('about', function () {
//    return view('pages.about'); // resources/views/pages/about.blade.php
//});