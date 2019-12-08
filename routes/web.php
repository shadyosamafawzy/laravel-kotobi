<?php


Route::get('/home', 'Controller@checkUser');

Route::get('logout', 'UserController@logout');

Route::get('login', 'UserController@loginForm');
Route::post('login', 'UserController@loginProcess');

Route::get('register', 'UserController@registerForm');
Route::post('register', 'UserController@registerProcess');

//admin operations
    //categories
Route::get('categories','CategoriesController@index')->name('categoriesAdmin');
Route::get('cat/del/{category}','CategoriesController@delete');
Route::get('add/category','CategoriesController@addForm')->name('addCategoryAdmin');
Route::post('add/category','CategoriesController@addProcess');
Route::get('cat/edit/{category}','CategoriesController@editForm');
Route::post('cat/edit/{category}','CategoriesController@editProcess');

