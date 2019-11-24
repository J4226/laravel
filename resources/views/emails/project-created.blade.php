@component('mail::message')
# New Project: {{ $project->title }}

This is the project description: 
{{ $project->description }}

@component('mail::button', ['url' => '/projects' . $project->id])
View Project Here!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
