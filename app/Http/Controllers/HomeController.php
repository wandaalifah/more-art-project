<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(): View
    {
        //render view with posts
        return view('home.index');
    }

    public function works(Request $request): View
    {
        $projects = Project::latest()->get();
        
        $category_id = $request->query('category');
    
    // Fetch projects, filtered by category if selected
    if ($category_id) {
        $projects = Project::where('category_id', $category_id)->latest()->get();
    } else {
        $projects = Project::latest()->get();
    }
        foreach ($projects as $project) {
            $firstMedia = $project->getMedia()->first();
            if ($firstMedia) {
                $project->first_image_url = parse_url($firstMedia->getUrl())['path'];
            } else {
                $project->first_image_url = null; // Set a default or handle if no image is available
            }
        }

        $categories = Category::all();

        return view('home.works', compact('projects', 'categories'));
    }

    public function worksDetail(string $id): View
    {
        $project = Project::find($id);

        return view('home.worksDetail', compact('project'));
    }

    public function about(): View
    {
        //render view with posts
        return view('home.about');
    }

    public function sendEmail(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'email' => 'required|email',
            'message' => 'required|string|max:500',
        ]);

        // Send email
        Mail::raw($validatedData['message'], function ($message) use ($validatedData) {
            $message->to('recipient@example.com') // Replace with the recipient's email
                    ->subject('New Contact Message')
                    ->from($validatedData['email']); // Send from the sender's email
        });

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
