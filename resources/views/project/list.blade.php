<h1>Project list:</h1>
@foreach ($projects as $project)
    <p>{{ $project->name }}</p>
@endforeach