<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function store()
    {
        Project::create(request(['title', 'description']));

        return redirect('/projects');
    }
}
