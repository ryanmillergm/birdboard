<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Project;

class ProjectTest extends TestCase
{
    use RefreshDatabase;


    /** @test */
    public function test_it_has_a_path()
    {
        $project = Project::factory()->create();

        $this->assertEquals('/projects/' . $project->id, $project->path());
    }
}
