<?php

namespace App\Http\Repositories;

use App\Http\Requests\ProjectFormRequest;
use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;

class EloquentProjectRepository implements ProjectRepository
{

    public function add(ProjectFormRequest $request): Project
    {

        return Project::create($request->all());
    }

    public function all(): Collection
    {
       return Project::all();
    }

    public function update(Project $project, ProjectFormRequest $request)
    {
        $project->fill($request->all());
        $project->save();

    }

    public function destroy(Project $projectId)
    {
        $projectId->delete();
    }
}
