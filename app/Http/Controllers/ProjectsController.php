<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ProjectRepository;

class ProjectsController extends Controller
{

    public function __construct(private ProjectRepository $projectRepository)
    {
    }

    public function index()
    {
        return view('projects.index');
    }

    public function store()
    {

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
