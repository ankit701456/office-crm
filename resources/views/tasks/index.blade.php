@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">

    <h3>Tasks</h3>

    <a href="{{ route('tasks.create') }}"
       class="btn btn-primary">

       Add Task

    </a>

</div>

<table class="table table-bordered">

    <thead>

        <tr>

            <th>ID</th>

            <th>Title</th>

            <th>Employee</th>

            <th>Priority</th>

            <th>Status</th>

            <th>Deadline</th>

            <th>Action</th>

        </tr>

    </thead>

    <tbody>

        @foreach($tasks as $task)

        <tr>

            <td>{{ $task->id }}</td>

            <td>{{ $task->title }}</td>

            <td>{{ $task->employee->name ?? '' }}</td>

            <td>{{ $task->priority }}</td>

            <td>{{ $task->status }}</td>

            <td>{{ $task->deadline }}</td>

            <td>

                <a href="{{ route('tasks.edit', $task->id) }}"
                   class="btn btn-warning btn-sm">

                   Edit

                </a>

                <form action="{{ route('tasks.destroy', $task->id) }}"
                      method="POST"
                      style="display:inline-block">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">

                        Delete

                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </tbody>

</table>

@endsection