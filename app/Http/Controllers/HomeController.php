<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
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

    public function works(): View
    {
        $categories = Category::latest();
        
        //render view with posts]
        return view('home.works',compact('categories'));
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
