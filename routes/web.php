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

Route::post('/books', 'BooksController@store');

//{book} matches the argument $book in update function in BooksController
Route::patch('/books/{book}', 'BooksController@update');

Route::delete('/books/{book}', 'BooksController@destroy');

Route::post('/authors', 'AuthorsController@store');


// https://www.youtube.com/watch?v=0Rjsuw1ScXg&list=PLpzy7FIRqpGAbkfdxo1MwOS9xjG3O3z1y