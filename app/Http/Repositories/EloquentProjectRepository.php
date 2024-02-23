<?php

namespace App\Http\Repositories;

use App\Http\Requests\ProjectFormRequest;
use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class EloquentProjectRepository implements ProjectRepository
{

    public function add(ProjectFormRequest $request): Project
    {
        return DB::transaction(function () use ($request) {
            $project = Project::create([
                'name' => $request->name,
                'description' => $request->description,
                'technologies' => $request->technologies,
                'url' => $request->url,
                'img' => $request->img,
            ]);

            return $project;

        }, attempts: 5);
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
