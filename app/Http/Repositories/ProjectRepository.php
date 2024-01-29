<?php

namespace App\Http\Repositories;

use App\Models\Project;

interface ProjectRepository
{

    public function add(int $projectId): Project;

    public function all();

    public function update();

    public function destroy(int $projectId);

}
