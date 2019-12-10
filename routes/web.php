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

    //authors
Route::get('authors','AuthorsController@index')->name('authorsAdmin');
Route::get('author/del/{authors}','AuthorsController@delete');
Route::get('add/author','AuthorsController@addForm')->name('addAuthorAdmin');
Route::post('add/author','AuthorsController@addProcess');
Route::get('author/edit/{authors}','AuthorsController@editForm');
Route::post('author/edit/{authors}','AuthorsController@editProcess');

