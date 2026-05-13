<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeaveRequest;

class LeaveController extends Controller
{
    public function index()
    {
        $leaves = LeaveRequest::latest()->get();

        return view('leaves.index', compact('leaves'));
    }

    public function approve($id)
    {
        $leave = LeaveRequest::findOrFail($id);

        $leave->status = 'Approved';
        $leave->save();

        return back()->with('success', 'Leave Approved Successfully');
    }

    public function reject($id)
    {
        $leave = LeaveRequest::findOrFail($id);

        $leave->status = 'Rejected';
        $leave->save();

        return back()->with('success', 'Leave Rejected Successfully');
    }
}