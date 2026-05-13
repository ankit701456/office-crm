<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::latest()->get();

        return view('notifications.index', compact('notifications'));
    }

    public function create()
    {
        return view('notifications.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'title' => 'required',
            'message' => 'required'
        ]);

        Notification::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'message' => $request->message,
            'is_read' => false
        ]);

        return redirect()->route('notifications.index')
            ->with('success', 'Notification Created Successfully');
    }

    public function show(string $id)
    {
        $notification = Notification::findOrFail($id);

        $notification->update([
            'is_read' => true
        ]);

        return view('notifications.show', compact('notification'));
    }

    public function destroy(string $id)
    {
        $notification = Notification::findOrFail($id);

        $notification->delete();

        return back()->with('success', 'Notification Deleted');
    }
}