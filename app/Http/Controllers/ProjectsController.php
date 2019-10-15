<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        
        return view('projects.index', compact('projects')); 
        
    }
    
     public function create()
    {
        
        return view('projects.create'); 
        
    }
    
    public function store()
    {
        
        $project = new Project();
        
        $project->title= request('title');
        $project->description= request('description');
        
        $project->save();
        
        return redirect('/projects');
    }
    
    public function edit($id) //example.com/projects/1/edit
    {
        //return $id;
        $project = Project::findOrfail($id);
        return view('projects.edit', compact('project'));
    }
    
    public function update($id)
    {
        
    $project = Project::find($id);
    
    $project->title = request('title');
    $project->description = request('description');
    
    $project->save();
    
    return redirect('/projects');
    }
    
    public function destroy($id)
    {
        Project::find($id)->delete();
        return redirect('/projects');
    }
}
