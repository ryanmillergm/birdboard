@extends('layouts.appProjects')

@section('content')

    <div class="flex items-center mb-3">
        <h1 class="text-4xl text-black-700 font-semibold mr-auto">BirdBoard</h1>

        <a href="{{ url('/projects/create')}}">New Project</a>
    </div>

    <ul>
        @forelse ($projects as $project)
            <li>
                <a href="{{ $project->path() }}">{{ $project->title }}</a>
            </li>
        @empty
            <li>No projects yet.</li>
        @endforelse
    </ul>

@endsection
