<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view( 'projects/index' )->with( 'projects', $projects );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'projects/create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'title'         => 'required|max:255',
            'description'   => 'required',
            'tech'          => 'required|max:255',
            'link_live'     => 'required|max:255',
            'link_github'   => 'required|max:255',
            'image'         => 'image|required|max:1999',
            'gif'           => 'image|required|max:1999'
        ]);

        // FILE UPLOADS
        $image  = $request->file( 'image' );
        $gif    = $request->file( 'gif' );

        //GENERATE UNIQUE FILE NAME
        $originalFileName   = $image->getClientOriginalName();
        $parts              = explode( '.', $originalFileName );
        $name               = $parts[ 0 ];
        $ext                = $parts[ 1 ];
        $time               = time();
        $finalFileName      = "$name-$time.$ext";

        //UPLOAD IMAGES TO STORAGE
        $image->storeAs( 'public/img/projects/image', $finalFileName );  // UPLOAD IMAGE
        $gif->storeAs( 'public/img/projects/gif', $finalFileName );     // UPLOAD GIF
        //$ php artisan storage:link

        $project = new Project();

        $project->title         = $request->input( 'title' );
        $project->description   = $request->input( 'description' );
        $project->tech          = $request->input( 'tech' );
        $project->link_live     = $request->input( 'link_live' );
        $project->link_github   = $request->input( 'link_github' );
        $project->image         = $finalFileName;
        $project->gif           = $finalFileName;

        $project->save();

        return redirect( 'dash' )->with( 'success', 'New project successfully created.' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find( $id );
        return view( 'projects/show' )->with( 'project', $project );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
