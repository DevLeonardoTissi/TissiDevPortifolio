<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ProjectRepository;
use App\Http\Requests\ProjectFormRequest;

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
        $project = $this->projectRepository->add($request);
        return to_route('projects.index')
            ->with('successMessage', "Projeto '$project->name' adicionado com sucesso");
    }

    public function create()
    {
        return view('projects.create');
    }


    public function update()
    {

    }

    public function destroy()
    {

    }

}
