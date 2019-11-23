<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Mail;
use App\Services\Twitter;
use App\Project;
use App\Mail\ProjectCreated as ProjectCreatedMail;
use App\Events\ProjectCreated;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    $this->middleware('can:update,project')
        ->except(['index', 'store', 'create']);
       // $this->middleware('auth')->except(['show']);
    }
    public function index()
    {
        $projects = Project::where('owner_id', auth()->id())->get();
        
        return view('projects.index', compact('projects')); 
        
    }
    
   /* public function show(Filesystem $file)
    {
        dd($file);
    } */
    public function show(Project $project, Twitter $twitter)
    {
        
      //  $this->authorize('view', $project);
     //$this->authorize('update', $project);   
    // $twitter = app('twitter');
    // dd($twitter);
    //abort_unless(auth()->user()->owns($project), 403);
  /*
  if($project->owner_id !== auth()->id()) {
        dd('Wrong user, not allowed');
    }
        $filesystem = app('Illuminate\Filesystem\Filesystem');
    */    
    /*   if (\Gate::denies('update', $project)) {
           dd('Wrong user, access denied');
       }*/
        
       // abort_unless(\Gate::allows('update', $project), 403);
       
        return view('projects.show', compact('project'));
    }
    
     public function create()
    {
        $projects = Project::where('owner_id', auth()->id())->get();
        return view('projects.create'); 
        
    }
//Example of data cleansing and validation
//////////////////////////////////////////////////////////////    
    public function store()
    {
       $attributes = request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:3']
            
        ]);
        
        $attributes['owner_id'] = auth()->id();
        $project = Project::create($attributes);

     //   event(new ProjectCreated($project));
       
       /*
       Mail::to($project->owner->email)->send(
            new ProjectCreated($project)
       );
        */
        return redirect('/projects');
    }
//////////////////////////////////////////////////////////////  
    
    public function edit(Project $project) //example.com/projects/1/edit
    {
        //return $id;
        //$project = Project::findOrfail($id);
        return view('projects.edit', compact('project'));
    }
    
    public function update(Project $project)
    {
    
    // $this->authorize('update', $project);   
   // $project = Project::find($id);
    $project->update(request(['title', 'description']));
    return redirect('/projects');
    }
    
    public function destroy(Project $project)
    {
     //   $this->authorize('destroy', $project); 
        $project->delete();
        return redirect('/projects');
    }
}
