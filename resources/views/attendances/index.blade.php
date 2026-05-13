@extends('layouts.app')

@section('content')

<h3 class="mb-3">

    Attendance List

</h3>

<a href="{{ route('attendances.create') }}"
   class="btn btn-primary mb-3">

   Mark Attendance

</a>

<table class="table table-bordered">

    <thead>

        <tr>

            <th>Employee</th>

            <th>Date</th>

            <th>Check In</th>

            <th>Status</th>

        </tr>

    </thead>

    <tbody>

        @foreach($attendances as $attendance)

        <tr>

            <td>{{ $attendance->user->name ?? '' }}</td>

            <td>{{ $attendance->date }}</td>

            <td>{{ $attendance->check_in }}</td>

            <td>{{ $attendance->status }}</td>

        </tr>

        @endforeach

    </tbody>

</table>

@endsection