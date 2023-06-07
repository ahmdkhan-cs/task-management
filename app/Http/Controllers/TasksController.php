<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TasksController extends Controller
{
    public function index(){
        return Inertia::render('Tasks/Tasks',[
            'tasks' => Task::with('project', 'creator', 'assignee')->get(),
            'statuses' => Task::select('status')->distinct()->get()
        ]);
    }
}
