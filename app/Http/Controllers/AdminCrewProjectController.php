<?php

namespace App\Http\Controllers;

use Date;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Project;
use App\Models\Crew;
use Illuminate\Support\Facades\DB;

    class AdminCrewProjectController extends Controller
    {
        public function index(Crew $crew)
        {
        
            $projects = $crew->project()->latest()->paginate(5);;

            return view('admin.crews.details.index', ['crew' => $crew, 'projects' => $projects]);
        }

        public function edit(Crew $crew, $project_crew_id): View
        {
            $project = $crew->project()->wherePivot('id', $project_crew_id)->first();

            if (!$project) {
                abort(404, 'Crew entry not found in the project.');
            }

            return view('admin.crews.details.edit', [
                'project' => $project,
                'crew' => $crew,
                'project_crew_id' => $project_crew_id
            ]);
        }

        public function update(Request $request, Crew $crew, $id)
        {
            $validatedData = $request->validate([
                'role' => 'required|string|max:255',
            ]);

            $checkExist = DB::table('project_crew')
                ->where('id', $id)
                ->first();
        
            if (!$checkExist) {
                // Row not found, redirect back with an error message
                return redirect()->route('crews.details.index', $crew->id)
                    ->with('error', 'Crew not found or already removed from the project.');
            }

            DB::table('project_crew')
                ->where('id', $id)
                ->update([
                    'role' => $validatedData['role'],
                    'updated_at' => now(),
                ]);

            return redirect()->route('crews.details.index', $crew->id)
                ->with('success', 'Role updated successfully');
        }
        
        public function create(Crew $crew): View
        {
            $availableProjects = Project::all();
            
            return view('admin.crews.details.create', ['crew' => $crew, 'projects' => $availableProjects]);
        }
        
        public function store(Request $request, Crew $crew)
        {
            $this->validate($request, [
                'project_id' => 'required|exists:projects,id',
                'role' => 'required|string|max:255',
            ]);

            $crew->project()->attach($request->input('project_id'), [
                'role' => $request->input('role'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return redirect()->route('crews.details.index', $crew->id)->with('success', 'Crew assigned successfully.');
        }

        public function show(Crew $crew, $project_crew_id)
        {
            $project = $crew->project()->wherePivot('id', $project_crew_id)->first();

            if (!$crew) {
                abort(404, 'Crew entry not found in the project.');
            }

            return view('admin.crews.details.show', [
                'project' => $project,
                'crew' => $crew,
                'project_crew_id' => $project_crew_id
            ]);
        }

        public function destroy(Crew $crew, $id): RedirectResponse
        {
            $checkExist = DB::table('project_crew')
                ->where('id', $id)
                ->first();
        
            if (!$checkExist) {
                // Row not found, redirect back with an error message
                return redirect()->route('crews.details.index', $crew->id)
                    ->with('error', 'Crew not found or already removed from the project.');
            }

            DB::table('project_crew')
                ->where('id', $id)
                ->delete($id);
       
            return redirect()->route('crews.details.index', $crew->id)
                ->with('success', 'Crew removed from the project successfully.');
        
        }
    }
