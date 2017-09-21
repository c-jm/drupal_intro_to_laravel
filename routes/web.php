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


// Example of a simple route
Route::get('/hello_drupal', function() {
    return 'My name is laravel';
});

// Example of route pointing towards a controller method
Route::get('/hello_drupal/imlaravel', 'LaravelController@show');

// Example of passing a parameter inside of a route.
Route::get('/sum/{num1}/{num2}', function($num1, $num2) {
    return ($num1 + $num2);
}); 

// Example of doing a post request through Laravel.
Route::post('/sum/better', 'CalculationController@calculate');


/** Views **/ 

Route::get('/hellopage/{name}', function($name) {
    return view('test', ['name' => $name ]);
});

Route::get('/hello_drupal/numbers', function() {
    $numbers = [1, 2, 3, 4];

    return view('numbers', ['numbers' => $numbers]);
});


/** Models and Databases **/
Route::post('/people', 'PeopleController@create');
Route::get('/people',  'PeopleController@index');
Route::get('/people/{id}', 'PeopleController@show');
