<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Client;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('client')->latest()->get();

        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        $clients = Client::all();

        return view('projects.create', compact('clients'));
    }

    public function store(Request $request)
    {
        Project::create([
            'name' => $request->name,
            'description' => $request->description,
            'client_id' => $request->client_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => 'Pending'
        ]);

        return redirect()->route('projects.index');
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);

        $clients = Client::all();

        return view('projects.edit', compact('project', 'clients'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $project->update([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()->route('projects.index');
    }

    public function destroy($id)
    {
        Project::findOrFail($id)->delete();

        return back();
    }
}