<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\User;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::with('manager')->latest()->get();

        return view('teams.index', compact('teams'));
    }

    public function create()
    {
        $managers = User::role('Manager')->get();

        return view('teams.create', compact('managers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'manager_id' => 'required'
        ]);

        Team::create([
            'name' => $request->name,
            'manager_id' => $request->manager_id
        ]);

        return redirect()->route('teams.index');
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);

        $managers = User::role('Manager')->get();

        return view('teams.edit', compact('team', 'managers'));
    }

    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);

        $team->update([
            'name' => $request->name,
            'manager_id' => $request->manager_id
        ]);

        return redirect()->route('teams.index');
    }

    public function destroy($id)
    {
        Team::findOrFail($id)->delete();

        return back();
    }
}