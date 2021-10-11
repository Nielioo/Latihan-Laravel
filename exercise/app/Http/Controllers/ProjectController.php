<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    public function project()
    {
        return view('project', [
            "title" => "ProjectPage",
            "projects" => Project::getAllProjectData()
        ]);
    }
    
    public function showProject($code){
        return view('showProject', [
            "title" => "ProjectPage",
            "projects" => Project::getDataByCode($code)
        ]);
    }
}
