@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h3>Employees</h3>

    <a href="{{ route('employees.create') }}" class="btn btn-primary">
        Add Employee
    </a>
</div>

<table class="table table-bordered">

    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
    </thead>

    <tbody>

        @foreach($employees as $employee)

        <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->roles->pluck('name')->implode(', ') }}</td>
        </tr>

        @endforeach

    </tbody>

</table>

@endsection