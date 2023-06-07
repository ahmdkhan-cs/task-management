<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    protected $colors;

    public function __construct()
    {
        $this->colors = [
            'bg-red-500',
            'bg-green-500',
            'bg-blue-500',
            'bg-orange-500',
            'bg-purple-500',
        ];
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        foreach($projects as $key => &$project){
            $project['color'] = $this->colors[$key];
        }
        return response()->json(['projects' => $projects], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
