<?php

use Illuminate\Filesystem\Filesystem;
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
/*
app()->singleton('example', function () {
    return new \App\Example;
});
*/

app()->singleton('App\Services\Twitter', function () {
    return new \App\Services\Twitter(config('services.twitter.api_key'));
});

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');



Route::resource('projects', 'ProjectsController');
//Route::get('/projects', 'ProjectsController@index');
//Route::post('/projects', 'ProjectsController@store');
//Route::get('/projects/create', 'ProjectsController@create');
//Route::get('/projects/{project}', 'ProjectsController@show');
//Route::get('/projects/{project}/edit', 'ProjectsController@edit');
//Route::patch('/projects/{project}', 'ProjectController@update');
//Route::delete('/projects/{project}', 'ProjectsController@destroy');


Route::patch('/tasks/{task}', 'ProjectTasksController@update');
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');


Route::get('/', function () {
    dd(app('App\Example'));
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () { //example.com/contact
    return view('contact');
});