<?php

namespace App\Http\Controllers;

use Date;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Project;
use App\Models\Crew;
use Illuminate\Support\Facades\DB;

    class AdminProjectCrewController extends Controller
    {
        public function index(Project $project)
        {
        
            $crews = $project->crews()->latest()->paginate(5);;

            return view('admin.projects.details.index', ['project' => $project, 'crews' => $crews]);
        }

        public function edit(Project $project, $project_crew_id): View
        {
            $crew = $project->crews()->wherePivot('id', $project_crew_id)->first();

            if (!$crew) {
                abort(404, 'Crew entry not found in the project.');
            }

            return view('admin.projects.details.edit', [
                'project' => $project,
                'crew' => $crew,
                'project_crew_id' => $project_crew_id
            ]);
        }

        public function update(Request $request, Project $project, $id)
        {
            $validatedData = $request->validate([
                'role' => 'required|string|max:255',
            ]);

            $checkExist = DB::table('project_crew')
                ->where('id', $id)
                ->first();
        
            if (!$checkExist) {
                // Row not found, redirect back with an error message
                return redirect()->route('projects.details.index', $project->id)
                    ->with('error', 'Crew not found or already removed from the project.');
            }

            DB::table('project_crew')
                ->where('id', $id)
                ->update([
                    'role' => $validatedData['role'],
                    'updated_at' => now(),
                ]);

            return redirect()->route('projects.details.index', $project->id)
                ->with('success', 'Role updated successfully');
        }
        
        public function create(Project $project): View
        {
            $availableCrews = Crew::all();
            
            return view('admin.projects.details.create', ['project' => $project, 'crews' => $availableCrews]);
        }
        
        public function store(Request $request, Project $project)
        {
            $this->validate($request, [
                'crew_id' => 'required|exists:crews,id',
                'role' => 'required|string|max:255',
            ]);

            $project->crews()->attach($request->input('crew_id'), [
                'role' => $request->input('role'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return redirect()->route('projects.details.index', $project->id)->with('success', 'Crew assighed successfully.');
        }

        public function show(Project $project, $project_crew_id)
        {
            $crew = $project->crews()->wherePivot('id', $project_crew_id)->first();

            if (!$crew) {
                abort(404, 'Crew entry not found in the project.');
            }

            return view('admin.projects.details.show', [
                'project' => $project,
                'crew' => $crew,
                'project_crew_id' => $project_crew_id
            ]);
        }

        public function destroy(Project $project, $id): RedirectResponse
        {
            $checkExist = DB::table('project_crew')
                ->where('id', $id)
                ->first();
        
            if (!$checkExist) {
                // Row not found, redirect back with an error message
                return redirect()->route('projects.details.index', $project->id)
                    ->with('error', 'Crew not found or already removed from the project.');
            }

            DB::table('project_crew')
                ->where('id', $id)
                ->delete($id);
       
            return redirect()->route('projects.details.index', $project->id)
                ->with('success', 'Crew removed from the project successfully.');
        
        }
    }
