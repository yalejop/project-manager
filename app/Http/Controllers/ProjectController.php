<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    public function getAllProjects() {
        $projects = Project::take(10)->get();
        return $projects;
    }
}
