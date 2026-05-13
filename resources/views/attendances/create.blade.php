@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-header">

        <h4>Mark Attendance</h4>

    </div>

    <div class="card-body">

        <form action="{{ route('attendances.store') }}"
              method="POST">

            @csrf

            <button class="btn btn-success">

                Check In

            </button>

        </form>

    </div>

</div>

@endsection