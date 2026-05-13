<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = User::latest()->paginate(10);

        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        $roles = Role::all();

        return view('employees.create', compact('roles'));
    }

   public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        'role' => 'required',
        'profile_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'phone' => $request->phone,
        'designation' => $request->designation,
        'salary' => $request->salary,
        'joining_date' => $request->joining_date,
        'address' => $request->address,
    ]);

    /*
    |--------------------------------------------------------------------------
    | File Upload Code YAHI DALNA HAI
    |--------------------------------------------------------------------------
    */

    if ($request->hasFile('profile_image')) {

        $image = $request->file('profile_image')
            ->store('employees', 'public');

        $user->profile_image = $image;

        $user->save();
    }

    /*
    |--------------------------------------------------------------------------
    | Role Assign
    |--------------------------------------------------------------------------
    */

    $user->assignRole($request->role);

    return redirect()
        ->route('employees.index')
        ->with('success', 'Employee Created Successfully');
}
}