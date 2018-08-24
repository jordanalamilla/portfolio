<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class PagesController extends Controller
{
    public function about()
    {
        return view( 'about' );
    }

    public function dash()
    {
        $projects = Project::all();
        return view( 'dash' )->with( 'projects', $projects );
    }
}
