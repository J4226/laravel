@extends('layout')



@section('content')

    <h1 class="title">{{ $project->title }}</h1>


    <div class="content">{{ $project->description }}</div>
    <p>
        <a href="/projects/{{ $project->id }}/edit">Edit</a>
    </p>    
    
    
    
    @if ($project->tasks->count())
    
    
    <div>
        @foreach ($project->tasks as $task)
            <div>
                <form method="POST" action="/tasks/{{ $task->id }}">
                {{ csrf_field() }} 
                {{ method_field('PATCH') }} 
                    <label class="checkbox {{ $task->completed ? 'is-complete' : '' }}" for="completed">
                        <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                        
                        {{ $task->description }} 
                        
                    </label>
                </form>
            
            </div>
        @endforeach
    </div>
    @endif
    
    
    
@endsection