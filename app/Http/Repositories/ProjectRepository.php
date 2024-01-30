<?php

namespace App\Http\Repositories;

use App\Http\Requests\ProjectFormRequest;
use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;

interface ProjectRepository
{

    public function add(ProjectFormRequest $request): Project;

    public function all(): Collection;

    public function update();

    public function destroy(int $projectId);

}
