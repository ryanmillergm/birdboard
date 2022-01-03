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

    <header class="flex items-center mb-3 px-2 pb-4">
        <div class="flex justify-between items-center w-full">
            <h2 class="text-gray-400 text-sm font-normal">My Projects</h2>
            <a href="{{ url('/projects/create')}}" class="button">New Project</a>
        </div>
    </header>

    <main class="lg:flex lg:flex-wrap -mx-3">
        @forelse ($projects as $project)
            <div class="lg:w-1/3 px-3 pb-6">
                <div class="bg-white p-5 rounded-lg shadow-custom" style="height: 200px;">
                    <h3 class="font-normal text-xl py-4 -ml-5 border-l-4 border-blue-custom-light mb-3 pl-4">
                        <a href="{{url( $project->path())}}" class="font-medium">{{ $project->title }}</a>
                    </h3>

                    <div class="text-grey">{{ Str::limit($project->description, 100) }}</div>
                </div>
            </div>
        @empty
            <div>No projects yet.</div>
        @endforelse
    </main>
@endsection

