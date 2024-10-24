<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Project;
use App\Models\Category;

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
        $projects = Project::all();
        $categories = Category::all();
        return view('admin.projects.create', compact('categories'));
    }

    public function store(Request $request) : RedirectResponse
    {
       $this->validate($request, [
            'title' => 'required|string|max:255',
            'description' => 'required',
            'videoUrl' => 'required|min:5',
            'client' => 'required',
            'agency' => 'nullable',
            'ph' => 'nullable',
            'category_id' => 'required',
        ]);

        Project::create([
            'title' => $request -> title,
            'description' => $request -> description,
            'videoUrl' => $request -> videoUrl,
            'client' => $request -> client,
            'agency' => $request -> agency,
            'ph' => $request -> ph,
            'category_id' => $request -> category_id,
        ]);

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    public function edit($id): View
    {
        $project = Project::findOrFail($id);
        $categories = Category::all();

        return view('admin.projects.edit', ['project' => $project, 'categories' => $categories]);
    }

    public function update(Request $request, string $id): RedirectResponse
    {   
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'description' => 'required',
            'videoUrl' => 'required',
            'client' => 'required',
            'agency' => 'nullable',
            'ph' => 'nullable',
            'category_id' => 'required',
        ]);

        $projects = Project::findOrFail($id);

        $projects->update([
            'title' => $request -> title,
            'description' => $request -> description,
            'videoUrl' => $request -> videoUrl,
            'client' => $request -> client,
            'agency' => $request -> agency,
            'ph' => $request -> ph,
            'category_id' => $request -> category_id,
        ]);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function show(string $id): View
    {
        $project = Project::findOrFail($id);
        // return view('admin.projects.show', compact('project'));
        return view('admin.projects.show', ['project' => $project]);
    }

    public function destroy($id): RedirectResponse
    {
        $projects= Project::find($id);

        $projects->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }

    public function detail(string $id): View
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.detail', ['project' => $project]);
    }
}
