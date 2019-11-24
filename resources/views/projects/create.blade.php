@extends('layout')

@section('content')
<style>
            span {
                color: #636b6f;

            }
</style>
<span><a href="/projects">Back</a></span>
<body>
    <h1>Create New Project</h1>
    
    <form method="POST" action="/projects">
    
    {{ csrf_field() }}
    
        <div class="field">
            <label class="label" for="title"><span>Project Title</span></label>
            
            <div class="control">
                <input type="text" placeholder="Project Title" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title" value="{{ old('title') }}" required>
            </div>
        </div>
        
        
        <div class="field">
            <label class="label" for="description"><span>Project Description</span></label>
            
            <div class="control">
                <textarea name="description" placeholder="Describe your project" class="textarea {{ $errors->has('title') ? 'is-danger' : '' }}">{{ old('description') }} </textarea>
            </div>
        </div>
        
        <div class="field">
            <div class="control">
                <button type="submit" class="button">Create Project</button>
            </div>
        </div>
        @include('errors')
        
        
    </form>
@endsection
