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



// Route::get('terms', function () {
//     return view('pages.terms');
// });

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('terms', 'PagesController@terms');
Route::get('contact', 'PagesController@contact');
Route::get('thankyou', 'PagesController@thanks');

//Post
// Route::post('infoformsubmit', [
//     'as' => 'infoformsubmit.store',
//     'uses' => 'PostController@store',
// ]);

Route::post('infoformsubmit', array('as'=>'infoformsubmit.store', 'uses'=>'PostController@store'));

// Route::post('infoformsubmit', 'PostController@store');