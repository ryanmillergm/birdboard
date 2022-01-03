@extends('layouts.appProjects')

@section('content')

	<form method="POST" action="{{ url('/projects')}}">
		@csrf

		<h1 class="text-3xl text-black-700 font-semibold">Create a Project</h1>

		<div class="field">
			<label class="label" for="title">Title</label>

			<div class="control">
				<input type="text" class="input" name="title" placeholder="Title">
			</div>
		</div>

		<div class="field">
			<label class="label" for="description">Description</label>

			<div class="control">
				<textarea name="description" class="textarea"></textarea>
			</div>
		</div>

		<div class="field">
			<div class="control">
				<button type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Create Project</button>
                <a href="{{ url('/projects')}}" class="text-black-500 pl-3">Cancel</a>
			</div>
		</div>
	</form>
@endsection


