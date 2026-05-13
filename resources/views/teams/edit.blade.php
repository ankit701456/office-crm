@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-header">

        <h4>Edit Team</h4>

    </div>

    <div class="card-body">

        <form action="{{ route('teams.update', $team->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">

                <label>Team Name</label>

                <input type="text"
                       name="name"
                       value="{{ $team->name }}"
                       class="form-control">

            </div>

            <div class="mb-3">

                <label>Manager</label>

                <select name="manager_id"
                        class="form-control">

                    @foreach($managers as $manager)

                    <option value="{{ $manager->id }}"
                        {{ $team->manager_id == $manager->id ? 'selected' : '' }}>

                        {{ $manager->name }}

                    </option>

                    @endforeach

                </select>

            </div>

            <button class="btn btn-primary">

                Update Team

            </button>

        </form>

    </div>

</div>

@endsection