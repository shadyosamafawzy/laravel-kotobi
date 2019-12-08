<?php


Route::get('/home', function () {
    return view('users.index');
});

Route::get('logout', 'UserController@logout');

Route::get('login', 'UserController@loginForm');
Route::post('login', 'UserController@loginProcess');

Route::get('register', 'UserController@registerForm');
Route::post('register', 'UserController@registerProcess');

