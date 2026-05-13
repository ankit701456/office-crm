<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $employees = User::count();
        $projects = Project::count();
        $tasks = Task::count();
        $attendance = Attendance::count();

        return view('dashboard', compact(
            'employees',
            'projects',
            'tasks',
            'attendance'
        ));
    }
}