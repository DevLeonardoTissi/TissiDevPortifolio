<?php

use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/projects');
});

Route::resource('/projects', ProjectsController::class)
    ->except('show');
