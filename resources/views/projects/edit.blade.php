@extends('layout')


@section('content')
<style>
            span {
                color: #636b6f;

            }
</style>
<span><a href="/projects">Back</a></span>
<h1 class="title">Edit Project</h1>
    
    <form method="POST" action="/projects/{{ $project->id }}">
        {{ method_field('PATCH') }}
        
        {{ csrf_field() }}
        
        <div class="field">
            <label class="label" for="title"><span>Title</span></label>
            
            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}">
            </div>
        </div>
    
    
        <div class="field">
            <label class-"label" for="description">Description</label>
        
            <div class="control">
                <textarea name="description" class="textarea">{{ $project->description }}</textarea>
            </div>
        </div>
        
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Project</button>
            </div>    
        </div>
        
    </form>
    
    <form method="POST" action="/projects/{{ $project->id }}">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
    <div class="field">
            <div class="control">
                <button type="submit" class="button">DELETE Project</button>
            </div>    
        </div>
    </form>
@endsection
