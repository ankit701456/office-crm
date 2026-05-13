@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-header">

        <h4>Create Task</h4>

    </div>

    <div class="card-body">

        <form action="{{ route('tasks.store') }}"
              method="POST">

            @csrf

            <div class="mb-3">

                <label>Title</label>

                <input type="text"
                       name="title"
                       class="form-control">

            </div>

            <div class="mb-3">

                <label>Description</label>

                <textarea name="description"
                          class="form-control"></textarea>

            </div>

            <div class="mb-3">

                <label>Assign Employee</label>

                <select name="assigned_to"
                        class="form-control">

                    @foreach($employees as $employee)

                    <option value="{{ $employee->id }}">

                        {{ $employee->name }}

                    </option>

                    @endforeach

                </select>

            </div>

            <div class="mb-3">

                <label>Priority</label>

                <select name="priority"
                        class="form-control">

                    <option>Low</option>
                    <option>Medium</option>
                    <option>High</option>

                </select>

            </div>

            <div class="mb-3">

                <label>Deadline</label>

                <input type="date"
                       name="deadline"
                       class="form-control">

            </div>

            <button class="btn btn-success">

                Save Task

            </button>

        </form>

    </div>

</div>

@endsection