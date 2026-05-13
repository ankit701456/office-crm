@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-header">

        <h4>Create Project</h4>

    </div>

    <div class="card-body">

        <form action="{{ route('projects.store') }}"
              method="POST">

            @csrf

            <div class="mb-3">

                <label>Project Name</label>

                <input type="text"
                       name="name"
                       class="form-control">

            </div>

            <div class="mb-3">

                <label>Description</label>

                <textarea name="description"
                          class="form-control"></textarea>

            </div>

            <div class="mb-3">

                <label>Select Client</label>

                <select name="client_id"
                        class="form-control">

                    @foreach($clients as $client)

                    <option value="{{ $client->id }}">

                        {{ $client->name }}

                    </option>

                    @endforeach

                </select>

            </div>

            <button class="btn btn-success">

                Save Project

            </button>

        </form>

    </div>

</div>

@endsection