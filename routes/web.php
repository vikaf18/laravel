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

Route::get('/', function () {
    // return view('welcome');

    return "Hello, world!";
});

Route::get('/users', function() {
    return "This is a users page";
});


Route::get('/users/{id}', function($id) {
    return "This is a user page #" .$id;
});

Route::get('/books', function() {
    return "Все книги";
});

Route::get('/books/{id}', function($id) {
    return "Книга под номером №" .$id;
});