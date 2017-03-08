<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', 'AdminController@index')->middleware('protected');
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

// /books/{id}


// Route::get('/books/{id}', function () {
//     return view('welcome');
// });


Route::get('/books/{id}', 'books@index');

Route::get('/books', 'books@showAll');

// function(){
//     return view('welcome');
// });
