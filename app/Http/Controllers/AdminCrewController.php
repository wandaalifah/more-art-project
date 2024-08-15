<?php

namespace App\Http\Controllers;

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
}
