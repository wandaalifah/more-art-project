<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        //render view with posts
        return view('home.index');
    }

    public function works(): View
    {
        //render view with posts
        return view('home.works');
    }
}
