<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ProjectRepository;
use App\Http\Requests\ProjectFormRequest;
use App\Models\Project;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class ProjectsController extends Controller
{

    public function __construct(private readonly ProjectRepository $projectRepository)
    {
    }

    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $successMessage = session('successMessage');
        $projects = $this->projectRepository->all();
        return view('projects.index')
            ->with('projects', $projects)
            ->with('successMessage', $successMessage);
    }

    public function store(ProjectFormRequest $request): RedirectResponse
    {

        $cover_path = $request->file('img')?->store('project_img', 'public');
        $request->img = $cover_path;

        $project = $this->projectRepository->add($request);

        return to_route('projects.index')
            ->with('successMessage', "Projeto '$project->name' adicionado com sucesso");
    }

    public function create(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('projects.create');
    }

    public function edit(Project $project): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('projects.edit')->with('project', $project);
    }

    public function update(Project $project, ProjectFormRequest $request): RedirectResponse
    {
        $this->projectRepository->update($project, $request);
        return to_route('projects.index')
            ->with('successMessage', "Projeto '$project->name' alterado com sucesso");

    }

    public function destroy(Project $project): RedirectResponse
    {
        $this->projectRepository->destroy($project);
        return to_route('projects.index')
            ->with('successMessage', "Projeto '$project->name' deletado com sucesso");

    }

}
