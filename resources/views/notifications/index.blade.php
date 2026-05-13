@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">

    <h3>Notifications</h3>

    <a href="{{ route('notifications.create') }}"
       class="btn btn-primary">
       Add Notification
    </a>

</div>

<table class="table table-bordered">

    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Message</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>

        @foreach($notifications as $notification)

        <tr>

            <td>{{ $notification->id }}</td>

            <td>{{ $notification->title }}</td>

            <td>{{ $notification->message }}</td>

            <td>
                @if($notification->is_read)
                    <span class="badge bg-success">Read</span>
                @else
                    <span class="badge bg-danger">Unread</span>
                @endif
            </td>

            <td>

                <a href="{{ route('notifications.show', $notification->id) }}"
                   class="btn btn-info btn-sm">
                   View
                </a>

                <form action="{{ route('notifications.destroy', $notification->id) }}"
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