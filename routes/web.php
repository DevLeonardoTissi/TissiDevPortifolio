<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/projects');
});

Route::middleware(\App\Http\Middleware\Authenticator::class)->group(function (){

    Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');

    Route::get('unregister', [UsersController::class, 'destroy'])->name('users.destroy');


});


Route::resource('/projects', ProjectsController::class)
    ->except('show');

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'store'])->name('sigin');


Route::get('register', [UsersController::class, 'create'])->name('users.create');
Route::post('register', [UsersController::class, 'store'])->name('users.store');

