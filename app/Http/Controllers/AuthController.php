<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;


class AuthController extends Controller
{
    public function changePassword(): View
    {
        return view('admin.changePassword');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/admin/categories');
        }
 
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->onlyInput('username');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/admin');
    }

    public function updatePassword(Request $request): RedirectResponse
    {
        // Validate the request data
        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // Get the currently authenticated user
        $user = Auth::user();

        // Update the user's password
        $user->password = Hash::make($request->password);
        $user->save();

        $request->session()->regenerate();

        return redirect()->route('categories.index');
    }
}
