<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Attendance;
use App\Models\Task;
use App\Models\Project;
use App\Models\Payroll;
use App\Models\Sale;

class ReportController extends Controller
{
    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | Employee Reports
        |--------------------------------------------------------------------------
        */

        $totalEmployees = User::count();

        $totalManagers = User::role('Manager')->count();

        $totalAdmins = User::role('Admin')->count();

        /*
        |--------------------------------------------------------------------------
        | Attendance Reports
        |--------------------------------------------------------------------------
        */

        $presentToday = Attendance::whereDate('date', today())
            ->where('status', 'Present')
            ->count();

        $lateToday = Attendance::whereDate('date', today())
            ->where('status', 'Late')
            ->count();

        /*
        |--------------------------------------------------------------------------
        | Task Reports
        |--------------------------------------------------------------------------
        */

        $pendingTasks = Task::where('status', 'Pending')->count();

        $completedTasks = Task::where('status', 'Completed')->count();

        /*
        |--------------------------------------------------------------------------
        | Project Reports
        |--------------------------------------------------------------------------
        */

        $runningProjects = Project::where('status', 'Running')->count();

        $completedProjects = Project::where('status', 'Completed')->count();

        /*
        |--------------------------------------------------------------------------
        | Payroll Reports
        |--------------------------------------------------------------------------
        */

        $paidPayrolls = Payroll::where('status', 'Paid')->count();

        $unpaidPayrolls = Payroll::where('status', 'Unpaid')->count();

        /*
        |--------------------------------------------------------------------------
        | Sales Reports
        |--------------------------------------------------------------------------
        */

        $totalTarget = Sale::sum('target');

        $totalAchieved = Sale::sum('achieved');

        return view('reports.index', compact(
            'totalEmployees',
            'totalManagers',
            'totalAdmins',
            'presentToday',
            'lateToday',
            'pendingTasks',
            'completedTasks',
            'runningProjects',
            'completedProjects',
            'paidPayrolls',
            'unpaidPayrolls',
            'totalTarget',
            'totalAchieved'
        ));
    }
}