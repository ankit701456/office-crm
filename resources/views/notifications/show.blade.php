@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-header">
        <h4>{{ $notification->title }}</h4>
    </div>

    <div class="card-body">

        <p>
            {{ $notification->message }}
        </p>

    </div>

</div>

@endsection