@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-header">

        <h4>Create Team</h4>

    </div>

    <div class="card-body">

        <form action="{{ route('teams.store') }}"
              method="POST">

            @csrf

            <div class="mb-3">

                <label>Team Name</label>

                <input type="text"
                       name="name"
                       class="form-control">

            </div>

            <div class="mb-3">

                <label>Select Manager</label>

                <select name="manager_id"
                        class="form-control">

                    @foreach($managers as $manager)

                    <option value="{{ $manager->id }}">

                        {{ $manager->name }}

                    </option>

                    @endforeach

                </select>

            </div>

            <button class="btn btn-success">

                Save Team

            </button>

        </form>

    </div>

</div>

@endsection