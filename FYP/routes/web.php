<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('names/{id}', function($id)
{
    $names = array(
      1 => "Juzer",
      2 => "Thomas",
      3 => "Lee"
    );    
    return array($id => $names[$id]);
});

Route::get('password/{id}', function($id)
{
    $password = array(
      1 => "juzer",
      2 => "jewmass",
      3 => "chenchuen"
    );    
    return array($id => $password[$id]);
});