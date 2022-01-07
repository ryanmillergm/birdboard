<?php

namespace App\Policies;

use App\Models\Project;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
{
    use HandlesAuthorization;

    /**
     * update
     *
     * @param  mixed $user
     * @param  mixed $project
     * @return void
     */
    public function update(User $user, Project $project)
    {
        return $user->is($project->owner);
    }
}
