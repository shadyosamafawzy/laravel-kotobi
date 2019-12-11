<?php


Route::get('/home', 'Controller@checkUser');
//error 101
Route::get('101', 'Controller@error');

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
Route::get('author/{authors}','AuthorsController@findAuthor');

    //books
Route::get('books','BooksController@index')->name('booksAdmin');
Route::get('book/del/{book}','BooksController@delete');
Route::get('add/book','BooksController@addForm')->name('addBookAdmin');
Route::post('add/book','BooksController@addProcess');
Route::get('book/edit/{book}','BooksController@editForm');
Route::post('book/edit/{book}','BooksController@editProcess');
Route::get('book/{book}','BooksController@findBook');

