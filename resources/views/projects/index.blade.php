@extends('layouts.appProjects')

@section('content')

    {{-- This is an edited copy from the navbar to copy the flow--}}
    {{-- <div class="flex justify-between h-16">
        <div class="flex">
            <!-- Logo -->
            <h1 class="text-4xl text-black-700 font-semibold mr-auto">BirdBoard</h1>
        </div>


        <div class="flex items-center px-4">
            <a href="{{ url('/projects/create')}}">New Project</a>
        </div>
    </div> --}}

    <div class="flex items-center mb-3 px-4">
        <h1 class="text-4xl text-black-700 font-semibold mr-auto">BirdBoard</h1>

        <a href="{{ url('/projects/create')}}">New Project</a>
    </div>

    <div class="flex">
        @forelse ($projects as $project)
            <div class="bg-white mr-4 p-5 rounded shadow-custom w-1/3" style="height: 200px;">
                <h3 class="font-normal text-xl py-4">{{ $project->title }}</h3>

                <div class="text-grey">{{ Str::limit($project->description, 100) }}</div>
            </div>
        @empty
            <div>No projects yet.</div>
        @endforelse
    </div>
@endsection

