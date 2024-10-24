<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Crew;

class AdminCrewController extends Controller
{
    public function index(): View
    {
        $crews = Crew::latest()->paginate(5);

        //render view with posts
        return view('admin.crews.index', compact('crews'));
    }

    public function create(): View
    {
        return view('admin.crews.create');
    }

    public function store(Request $request) : RedirectResponse
    {
       $this->validate($request, [
            'name' => 'required|string|max:255',
        ]);

        Crew::create([
            'name' => $request->name,
        ]);

        {return redirect()->route('crews.index')->with('success', 'Crew created successfully.');}
    }

    public function edit($id): View
    {
        $crew = Crew::findOrFail($id);

        return view('admin.crews.edit', compact('crew'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $crew = Crew::findOrFail($id);

        $crew->update([
            'name'     => $request->name,
        ]);

        return redirect()->route('crews.index')->with('success', 'Crew updated successfully.');
    }

    public function show(string $id): View
    {
        $crew = Crew::findOrFail($id);

        return view('admin.crews.show', ['crew' => $crew]);
    }
    
    public function destroy($id): RedirectResponse
    {
        $crew = Crew::find($id);

        $crew->delete();

        return redirect()->route('crews.index')->with('success', 'Crew deleted successfully.');
    }
}
