<?php

namespace App\Http\Controllers;

use App\City;
use App\Company;
use App\User;
use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    public function getAllProjects() {
        $projects = Project::take(10)->get();
        return $projects;
    }

    public function insertProject() {
        $project = new Project;
        $project->city_id = 1;
        $project->company_id = 1;
        $project->user_id = 1;
        $project->name = 'Nombre del proyecto';
        $project->execution_date = '2020-04-30';
        $project->is_active = 1;
        $project->save();

        return "Guardado";
    }

    public function insertCity() {
        $project = new City();
        $project->name = 'Medellin';
        $project->save();

        return "New City saved";
    }

    public function insertCompany() {
        $project = new Company();
        $project->name = 'Noel';
        $project->save();

        return "New Company saved";
    }

    public function insertUser() {
        $project = new User();
        $project->name = 'Enrique';
        $project->save();

        return "New User saved";
    }

    //cuando la información viene de un registro o fuente externa.

   /*  public function insertProject(Request $request) {
        $project = new Project;
        $project->city_id = $request->cityId;
        $project->company_id = $request->companyId;
        $project->user_id = $request->userId;
        $project->name = $request->name;
        $project->execution_date = $request->executionDate;
        $project->is_active = $request->isActive;
        $project->save();
    }
 */
}
