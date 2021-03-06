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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calc/', function () {
    return view('calc');
});

Route::get('/hello/{name}/{name2}/', 'hellocontroller@index');

Route::get('/calc/{n1}/{n2}/', 'hellocontroller@calc_function');

Route::post('/calc/', 'hellocontroller@add_function');
Route::get('/chat/', 'hellocontroller@chat');

Route::get('/multiply/', 'hellocontroller@multiply_display');

Route::post('/multiply/', 'hellocontroller@multiply');

Route::get('/blog_addition/', 'blogsController@index');

Route::get('/blog_view/', 'blogsController@view');

Route::post('/blog_view/', 'blogsController@viewall');

Route::get('/blog_view_all/', 'blogsController@viewall');

Route::get('/blog_delete/{id}', 'blogsController@delete');

Route::post('/blog_addition/', 'blogsController@save');

Route::post('/blog_update/', 'blogsController@update');

Route::get('/blog_edit/{id}', 'blogsController@edit');

