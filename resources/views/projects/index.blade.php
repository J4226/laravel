<DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>

<body>
    <b><a href="/">Home</a></b>
    <br><br>
    <span><a href="/projects/create">Create New Project!</a></span>
    <h1>Projects</h1>
    
    @if (session('message'))
        <p>{{ session('message') }}</P>
    @endif
    <ul>
    @foreach ($projects as $project)
    
    <li> 
    
    <a href="/projects/{{ $project->id }}">
    {{ $project->title }}
    </a>
    
    
    
    </li>
    @endforeach
    </ul>
    
    
</body>
</html>    
