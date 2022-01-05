@extends('layouts.appProjects')

@section('content')

    <header class="flex items-center mb-3 px-2 pb-4">
        <div class="flex justify-between items-end w-full">
            <p class="text-gray-400 text-sm font-normal">
                <a href="{{ url('/projects') }}">My Projects</a> / {{ $project->title }}
            </p>

            <a href="{{ url('/projects/create')}}" class="button">New Project</a>
        </div>
    </header>

    <main>
        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3 mb-6">
                <div class="mb-6">
                    <h2 class="text-gray-400 text-lg font-normal mb-3">Tasks</h2>

                    {{-- tasks --}}
                    @foreach ($project->tasks as $task)
                        <div class="card mb-3">{{ $task->body }}</div>
                    @endforeach

                    <div class="card mb-3">
                        <form action="{{ $project->path() . '/tasks' }}" method="POST">
                            @csrf

                            <input placeholder="Add a new task..." class="w-full" name="body">
                        </form>
                    </div>
                </div>

                <div>
                    {{-- general notes --}}
                    <h2 class="text-gray-400 text-lg font-normal mb-3">General Notes</h2>

                    <textarea class="card w-full" style="min-height: 200px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus alias eos ipsa ducimus a debitis iure rem ex consequuntur. Repudiandae?</textarea>
                </div>
            </div>
            <div class="lg:w-1/4 px-3">
                @include('projects._card')
            </div>
        </div>
    </main>



@endsection

