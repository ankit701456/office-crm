@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">

    <h3>Projects</h3>

    <a href="{{ route('projects.create') }}"
       class="btn btn-primary">

       Add Project

    </a>

</div>

<table class="table table-bordered">

    <thead>

        <tr>

            <th>Name</th>

            <th>Client</th>

            <th>Status</th>


        </tr>

    </thead>

    <tbody>

        @foreach($projects as $project)

        <tr>

            <td>{{ $project->name }}</td>

            <td>{{ $project->client->name ?? '' }}</td>

            <td>{{ $project->status }}</td>



        </tr>

        @endforeach

    </tbody>

</table>

@endsection