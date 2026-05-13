<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::with('user')->latest()->get();

        return view('attendances.index', compact('attendances'));
    }

    public function create()
    {
        return view('attendances.create');
    }

    public function store(Request $request)
    {
        Attendance::create([
            'user_id' => auth()->id(),
            'date' => now()->toDateString(),
            'check_in' => now()->format('H:i:s'),
            'status' => 'Present'
        ]);

        return back();
    }
}