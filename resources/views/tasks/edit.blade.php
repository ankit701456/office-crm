@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-header">

        <h4>Edit Task</h4>

    </div>

    <div class="card-body">

        <form action="{{ route('tasks.update', $task->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">

                <label>Title</label>

                <input type="text"
                       name="title"
                       value="{{ $task->title }}"
                       class="form-control">

            </div>

            <div class="mb-3">

                <label>Description</label>

                <textarea name="description"
                          class="form-control">{{ $task->description }}</textarea>

            </div>

            <div class="mb-3">

                <label>Status</label>

                <select name="status"
                        class="form-control">

                    <option {{ $task->status == 'Pending' ? 'selected' : '' }}>
                        Pending
                    </option>

                    <option {{ $task->status == 'Completed' ? 'selected' : '' }}>
                        Completed
                    </option>

                </select>

            </div>

            <button class="btn btn-primary">

                Update Task

            </button>

        </form>

    </div>

</div>

@endsection