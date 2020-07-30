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

Route::get('/', 'HomeController@HomeIndex')->middleware('loginCheck');
Route::get('/visitor', 'VisitorController@VisitorIndex')->middleware('loginCheck');


//admin service management
Route::get('/services', 'ServiceController@ServiceIndex')->middleware('loginCheck');
Route::get('/getservicesdata', 'ServiceController@ServicecData')->middleware('loginCheck');
Route::post('/servicedel', 'ServiceController@ServicecDelete')->middleware('loginCheck');
Route::post('/servicedetails', 'ServiceController@ServiceDetailsEdit')->middleware('loginCheck');
Route::post('/serviceupdate', 'ServiceController@ServicecUpdate')->middleware('loginCheck');
Route::post('/addservice', 'ServiceController@ServicecAdd')->middleware('loginCheck');



//admin panel courses management
Route::get('/courses', 'CoursesController@CourseIndex')->middleware('loginCheck');
Route::get('/getcoursesdata', 'CoursesController@CoursesData')->middleware('loginCheck');
Route::post('/coursesedelete', 'CoursesController@CoursesDelete')->middleware('loginCheck');
Route::post('/coursesdetails', 'CoursesController@CoursesDetailEdit')->middleware('loginCheck');
Route::post('/coursesupdate', 'CoursesController@CourseUpdate')->middleware('loginCheck');
Route::post('/addcourses', 'CoursesController@CourseAdd')->middleware('loginCheck');


//admin panel projects management

Route::get('/projects', 'ProjectsController@ProjectIndex')->middleware('loginCheck');
Route::get('/getprojectdata', 'ProjectsController@ProjectsData')->middleware('loginCheck');
Route::post('/projectdelete', 'ProjectsController@ProjectsDelete')->middleware('loginCheck');
Route::post('/projectdetails', 'ProjectsController@ProjectsDetailEdit')->middleware('loginCheck');
Route::post('/projectupdate', 'ProjectsController@ProjectsUpdate')->middleware('loginCheck');
Route::post('/addproject', 'ProjectsController@ProjectsAdd')->middleware('loginCheck');



//Message panel management

Route::get('/message', 'MessageController@MessageIndex')->middleware('loginCheck');
Route::get('/getmessagedata', 'MessageController@MessageData')->middleware('loginCheck');
Route::post('/deletemessage', 'MessageController@MessageDelete')->middleware('loginCheck');



//Review panel Mangement
Route::get('/review', 'ReviewController@ReviewIndex')->middleware('loginCheck');
Route::get('/getReviewtdata', 'ReviewController@ReviewData')->middleware('loginCheck');
Route::post('/Reviewtdelete', 'ReviewController@ReviewDelete')->middleware('loginCheck');
Route::post('/Reviewtdetails', 'ReviewController@ReviewDetailsEdit')->middleware('loginCheck');
Route::post('/Reviewtupdate', 'ReviewController@ReviewUpdate')->middleware('loginCheck');
Route::post('/addReview', 'ReviewController@ReviewAdd')->middleware('loginCheck');



// Admin Panel Login Management
Route::get('/login', 'LoginController@LoginIndex');
Route::post('/onLogin', 'LoginController@onLogin');
Route::get('/logout', 'LoginController@onLogout');



// Admin Photo Gallery
Route::get('/Photo', 'PhotoController@PhotoIndex')->middleware('loginCheck');;
Route::post('/uploadPhoto', 'PhotoController@PhotoUpload')->middleware('loginCheck');;
Route::get('/PhotoJSON', 'PhotoController@PhotoJSON')->middleware('loginCheck');;
