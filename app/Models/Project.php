<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';

    use HasFactory;

    protected $fillable = ['name', 'description', 'technologies', 'url', 'img'];
    public $timestamps = false;

}
