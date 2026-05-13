<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Task List
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $tasks = Task::with('employee')->latest()->get();

        return view('tasks.index', compact('tasks'));
    }

    /*
    |--------------------------------------------------------------------------
    | Create Page
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        $employees = User::all();

        return view('tasks.create', compact('employees'));
    }

    /*
    |--------------------------------------------------------------------------
    | Save Task
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'assigned_to' => 'required',
            'priority' => 'required',
            'deadline' => 'required'
        ]);

        Task::create([

            'title' => $request->title,

            'description' => $request->description,

            'assigned_by' => auth()->id(),

            'assigned_to' => $request->assigned_to,

            'priority' => $request->priority,

            'deadline' => $request->deadline,

            'status' => 'Pending'
        ]);

        return redirect()
            ->route('tasks.index')
            ->with('success', 'Task Created');
    }

    /*
    |--------------------------------------------------------------------------
    | Edit Page
    |--------------------------------------------------------------------------
    */

    public function edit($id)
    {
        $task = Task::findOrFail($id);

        $employees = User::all();

        return view(
            'tasks.edit',
            compact('task', 'employees')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | Update Task
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $task->update([

            'title' => $request->title,

            'description' => $request->description,


            'status' => $request->status

        ]);

        return redirect()
            ->route('tasks.index')
            ->with('success', 'Task Updated');
    }

    /*
    |--------------------------------------------------------------------------
    | Delete Task
    |--------------------------------------------------------------------------
    */

    public function destroy($id)
    {
        Task::findOrFail($id)->delete();

        return back()
            ->with('success', 'Task Deleted');
    }
}