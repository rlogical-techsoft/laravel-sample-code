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

// Items lising action
Route::get('/', [
	'as' => 'item.index',
    'uses' => 'ItemsController@index'
]);

// Items data table post action
Route::post('items/processdt', [
	'as' => 'items.processdt',
	'uses' => 'ItemsController@processdt',
]);

// Question form action
Route::get('/question/', [
	'as' => 'question.index',
    'uses' => 'QuestionsController@index'
]);

// Send question post action
Route::post('question/sendquestion', [
	'as' => 'question.sendquestion',
	'uses' => 'QuestionsController@sendquestion',
]);