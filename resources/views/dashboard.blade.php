@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-md-3">
        <div class="card bg-primary text-white">
            <div class="card-body">
                <h4>{{ $employees }}</h4>
                <p>Employees</p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card bg-success text-white">
            <div class="card-body">
                <h4>{{ $projects }}</h4>
                <p>Projects</p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card bg-warning text-white">
            <div class="card-body">
                <h4>{{ $tasks }}</h4>
                <p>Tasks</p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card bg-danger text-white">
            <div class="card-body">
                <h4>{{ $attendance }}</h4>
                <p>Attendance</p>
            </div>
        </div>
    </div>

</div>

@endsection