<?php

namespace App\Http\Repositories;

use App\Models\Project;

class EloquentProjectRepository implements ProjectRepository
{

    public function add(int $projectId): Project
    {
        return new Project();
    }

    public function all()
    {
    }

    public function update()
    {
    }

    public function destroy(int $projectId)
    {

    }
}
