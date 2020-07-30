<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function() {
//     return response()->json([
//      'stuff' => phpinfo()
//     ]);
//  });



Route::get('/','HomeController@HomeIndex');

Route::post('/contactSend','HomeController@ContactSend');



