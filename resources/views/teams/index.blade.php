@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">

    <h3>Teams</h3>

    <a href="{{ route('teams.create') }}"
       class="btn btn-primary">

       Add Team

    </a>

</div>

<table class="table table-bordered">

    <thead>

        <tr>
            <th>ID</th>
            <th>Team</th>
            <th>Manager</th>
            <th>Action</th>
        </tr>

    </thead>

    <tbody>

        @foreach($teams as $team)

        <tr>

            <td>{{ $team->id }}</td>

            <td>{{ $team->name }}</td>

            <td>{{ $team->manager->name ?? '' }}</td>

            <td>

                <a href="{{ route('teams.edit', $team->id) }}"
                   class="btn btn-warning btn-sm">

                   Edit

                </a>

            </td>

        </tr>

        @endforeach

    </tbody>

</table>

@endsection