<?php

namespace App\Listeners;

use App\Events\ProjectDeleted;
use Illuminate\Support\Facades\Storage;

class DeleteStorageListener
{

    public function __construct()
    {

    }

    public function handle(ProjectDeleted $projectDeleted): void
    {
        Storage::disk('public')->delete([$projectDeleted->projectImagePath]);
    }
}
