<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ProjectRepository;
use App\Http\Requests\ProjectFormRequest;
use App\Models\Project;

class ProjectsController extends Controller
{

    public function __construct(private ProjectRepository $projectRepository)
    {
    }

    public function index()
    {
        $successMessage = session('successMessage');
        $projects = $this->projectRepository->all();
        return view('projects.index')
            ->with('projects', $projects)
            ->with('successMessage', $successMessage);
    }

    public function store(ProjectFormRequest $request)
    {

        $cover_path = $request->file('img')?->store('project_img', 'public');
        $request->img = $cover_path;

        $project = $this->projectRepository->add($request);

        return to_route('projects.index')
            ->with('successMessage', "Projeto '$project->name' adicionado com sucesso");
    }

    public function create()
    {
        return view('projects.create');
    }

    public function edit(Project $project)
    {
        return view('projects.edit')->with('project', $project);
    }

    public function update(Project $project, ProjectFormRequest $request)
    {
        $this->projectRepository->update($project, $request);
        return to_route('projects.index')
            ->with('successMessage', "Projeto '$project->name' alterado com sucesso");

    }

    public function destroy(Project $project)
    {
        $this->projectRepository->destroy($project);
        return to_route('projects.index')
            ->with('successMessage', "Projeto '$project->name' deletado com sucesso");

    }

}
