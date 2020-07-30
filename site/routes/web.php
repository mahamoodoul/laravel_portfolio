<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function() {
//     return response()->json([
//      'stuff' => phpinfo()
//     ]);
//  });



Route::get('/','HomeController@HomeIndex');

Route::post('/contactSend','HomeController@ContactSend');


Route::get('/Courses', 'CoursesController@CoursePage');
Route::get('/Projects', 'ProjectsController@ProjectPage');
Route::get('/Policy', 'PolicyController@PolicyPage');
Route::get('/Terms', 'TermsController@TermPage');
Route::get('/Contact', 'ContactController@ContactPage');



