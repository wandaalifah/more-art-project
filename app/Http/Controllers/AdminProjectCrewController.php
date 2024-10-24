<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Project;
use App\Models\Crew;

    class AdminProjectCrewController extends Controller
    {
        public function index(Project $project)
        {
        
            $crews = $project->crews()->latest()->paginate(5);;

            return view('admin.projects.details.index', ['project' => $project, 'crews' => $crews]);
        }

        public function create(Project $project): View
        {
            // $project = Project::findOrFail($id);
            $availableCrews = Crew::all();
            
            return view('admin.projects.details.create', ['project' => $project, 'crews' => $availableCrews]);
        }
        public function store(Request $request, Project $project)
        {
            $this->validate($request, [
                'crew_id' => 'required|exists:crews,id',
                'role' => 'required|string|max:255',
            ]);

            $project->crews()->attach($request->input('crew_id'), ['role' => $request->input('role')]);

            return redirect()->route('projects.details.index', $project->id)->with('success', 'Category created successfully.');
        }

        public function show(Project $project, Crew $crew)
        {
            if (!$project->crews->contains($crew)) {
                return redirect()->route('projects.details.index', $project->id)
                    ->with('error', 'Crew not found in this project.');
            }
        
            return view('admin.projects.details.show', compact('project', 'crew'));
        }

        public function destroy(Project $project, Crew $crew): RedirectResponse
        {
            if ($project->crews->contains($crew)) {
                $project->crews()->detach($crew->id);  // Detach the crew from the project
                return redirect()->route('projects.details.index', $project->id)
                    ->with('success', 'Crew removed from the project successfully.');
            }
        
            return redirect()->route('projects.details.index', $project->id)
                ->with('error', 'Crew not found in this project.');
        }
    }
