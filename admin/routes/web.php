<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@HomeIndex');
Route::get('/visitor', 'VisitorController@VisitorIndex');


//admin service management
Route::get('/services', 'ServiceController@ServiceIndex');
Route::get('/getservicesdata', 'ServiceController@ServicecData');
Route::post('/servicedel', 'ServiceController@ServicecDelete');
Route::post('/servicedetails', 'ServiceController@ServiceDetailsEdit');
Route::post('/serviceupdate', 'ServiceController@ServicecUpdate');
Route::post('/addservice', 'ServiceController@ServicecAdd');



//admin panel courses management
Route::get('/courses', 'CoursesController@CourseIndex');
Route::get('/getcoursesdata', 'CoursesController@CoursesData');
Route::post('/coursesedelete', 'CoursesController@CoursesDelete');
Route::post('/coursesdetails', 'CoursesController@CoursesDetailEdit');
Route::post('/coursesupdate', 'CoursesController@CourseUpdate');
Route::post('/addcourses', 'CoursesController@CourseAdd');


//admin panel projects management

Route::get('/projects', 'ProjectsController@ProjectIndex');
Route::get('/getprojectdata', 'ProjectsController@ProjectsData');
Route::post('/projectdelete', 'ProjectsController@ProjectsDelete');
Route::post('/projectdetails', 'ProjectsController@ProjectsDetailEdit');
Route::post('/projectupdate', 'ProjectsController@ProjectsUpdate');
Route::post('/addproject', 'ProjectsController@ProjectsAdd');



//Message panel management

Route::get('/message', 'MessageController@MessageIndex');
Route::get('/getmessagedata', 'MessageController@MessageData');
Route::post('/deletemessage', 'MessageController@MessageDelete');



//Review panel Mangement
Route::get('/review', 'ReviewController@ReviewIndex');
Route::get('/getReviewtdata', 'ReviewController@ReviewData');
Route::post('/Reviewtdelete', 'ReviewController@ReviewDelete');
Route::post('/Reviewtdetails', 'ReviewController@ReviewDetailsEdit');
Route::post('/Reviewtupdate', 'ReviewController@ReviewUpdate');
Route::post('/addReview', 'ReviewController@ReviewAdd');


