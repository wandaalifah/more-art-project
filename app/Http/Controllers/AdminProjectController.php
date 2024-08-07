<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
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

    public function create(): View
    {
        return view('projects.create');
    }

    public function store(Request $request) : RedirectResponse
    {
       $this->validate($request, [
            'title' => 'required|string|max:255',
            'description' => 'required|max:255',
            'videoUrl' => 'required|min:5',
            'client' => 'required',
            'agency' => 'required',
            'ph' => 'required',
            'categoryId' => 'required',
        ]);

        Project::create([
            'title' => $request -> title,
            'description' => $request -> description,
            'videoUrl' => $request -> videoUrl,
            'client' => $request -> client,
            'agency' => $request -> agency,
            'ph' => $request -> ph,
            'categoryId' => $request -> categoryId,
        ]);

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    public function edit($id): View
    {
        $project = Project::findOrFail($id);

        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {   
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'description' => 'required|max:255',
            'videoUrl' => 'required',
            'client' => 'required',
            'agency' => 'required',
            'ph' => 'required',
            'categoryId' => 'required',
        ]);

        $projects = Project::findOrFail($id);

        $projects->update([
            'title' => $request -> title,
            'description' => $request -> description,
            'videoUrl' => $request -> videoUrl,
            'client' => $request -> client,
            'agency' => $request -> agency,
            'ph' => $request -> ph,
            'categoryId' => $request -> categoryId,
        ]);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function show(string $id): View
    {
        $project = Project::findOrFail($id);
        return view('projects.show', compact('project'));
    }

    public function destroy($id): RedirectResponse
    {
        $projects= Project::find($id);

        $projects->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}