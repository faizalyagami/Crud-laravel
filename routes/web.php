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

// Route::get('/', 'QuestionController@home');

// Route::get('/question', 'QuestionController@viewQuestion');

// Route::get('/edit', 'QuestionController@edit');

// Route::post('/create', 'QuestionCOntroller@create');
Route::get('/', 'QuestionController@index');

Route::resource('question', 'QuestionController');

// Route::get('/create', 'QuestionController');


