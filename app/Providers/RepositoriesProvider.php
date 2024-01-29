<?php

namespace App\Providers;

use App\Http\Repositories\EloquentProjectRepository;
use App\Http\Repositories\ProjectRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesProvider extends ServiceProvider
{

    public array $bindings = [
        ProjectRepository::class => EloquentProjectRepository::class
    ];


}
