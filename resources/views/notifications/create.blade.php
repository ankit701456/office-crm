@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>Create Notification</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('notifications.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label>User ID</label>
                <input type="number" name="user_id" class="form-control">
            </div>

            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control">
            </div>

            <div class="mb-3">
                <label>Message</label>
                <textarea name="message" class="form-control"></textarea>
            </div>

            <button class="btn btn-primary">
                Save Notification
            </button>

        </form>

    </div>
</div>

@endsection