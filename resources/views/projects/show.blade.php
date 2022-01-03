@extends('layouts.appProjects')

@section('content')

    <h1>{{ $project->title }}</h1>

    <div>
        {{ $project->description }}
    </div>

    <a href="{{url('/projects')}}" class="text-blue-700">Go Back</a>

@endsection

