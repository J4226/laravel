<?php

use Illuminate\Filesystem\Filesystem;
use App\Services\Twitter;
use App\Repositories\UserRepository;
use App\Notifications\ProjectUpdated;
use Illuminate\Http\Request;
use App\Project;
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
/*
app()->singleton('App\Services\Twitter', function () {
    return new \App\Services\Twitter(config('services.twitter.api_key'));
});
*/


//Example Of Routing
Route::get('/welcome', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
/////////////////////////////////////////////

Route::resource('projects', 'ProjectsController');
//Route::resource('projects', 'ProjectsController')->middleware('can:update,project');
//Route::get('/projects', 'ProjectsController@index');
//Route::post('/projects', 'ProjectsController@store');
//Route::get('/projects/create', 'ProjectsController@create');
//Route::get('/projects/{project}', 'ProjectsController@show');
//Route::get('/projects/{project}/edit', 'ProjectsController@edit');
//Route::patch('/projects/{project}', 'ProjectController@update');
//Route::delete('/projects/{project}', 'ProjectsController@destroy');


Route::patch('/tasks/{task}', 'ProjectTasksController@update');
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');


//Route::get('/projects', 'ProjectsController@index');



Route::get('projects/create', function() {
   // $projects = Project::where('owner_id', auth()->id())->get();
   return view('projects.create'); 
    
});

Route::middleware('auth')->post('/projects', function() {
    
    
    $attributes = request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:3']
            
        ]);
        
        $attributes['owner_id'] = auth()->id();
        
        $project = Project::create($attributes);
    
     //App\Project::create($attributes);
     flash('Your project has been created.');
    return redirect('/projects');
});


/*
Route::get('/welcome', function(Request $request) {
   //session(['name' => 'JohnDoe']);
   //return session('name', 'default value placeholder');
  
   // $request->session()->put('foobar', 'baz');
   // return $request->session()->get('foobar');
    $request->flash();
    return view('welcome');
    
});
*/
/*
Route::get('/welcome', function() {

    $user = App\User::first();
    
    $user->notify(new ProjectUpdated);
    
    return 'Done';

});
 */  
/*
Route::get('/', function (UserRepository $users) {
   // dd(app('App\Example'));
   //dd(app('foo'));
  // dd($twitter);
   dd($users);
    return view('welcome');
});
*/


////////////////////////////////////////////////////////////////////////////
/*
Route::get('/welcome', function (UserRepository $users, Twitter $twitter) {
   //dd(app('App\Example'));
   //dd($twitter);
   //dd($users);
    return view('welcome');
});
*/
/////////////////////////////////////////////////////////////////////////////
Route::get('/', function (Twitter $twitter) {
   //dd($twitter);
    return view('welcome1');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () { //example.com/contact
    return view('contact');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
