<div class="card" style="height: 200px;">
    <h3 class="font-normal text-xl py-4 -ml-5 border-l-4 border-blue-custom-light mb-3 pl-4">
        <a href="{{url( $project->path())}}" class="font-medium">{{ $project->title }}</a>
    </h3>

    <div class="text-grey">{{ Str::limit($project->description, 100) }}</div>
</div>
