<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Project;

class AdminProjectController extends Controller
{
    public function index(): View
    {
        $projects = Project::latest()->paginate(5);

        //render view with posts
        return view('admin.projects.index', compact('projects'));
    }
}
