@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">

    <h3>Clients</h3>

    <a href="{{ route('clients.create') }}"
       class="btn btn-primary">

       Add Client

    </a>

</div>

<table class="table table-bordered">

    <thead>

        <tr>

            <th>ID</th>

            <th>Name</th>

            <th>Email</th>

            <th>Phone</th>


            <th>Action</th>

        </tr>

    </thead>

    <tbody>

        @foreach($clients as $client)

        <tr>

            <td>{{ $client->id }}</td>

            <td>{{ $client->name }}</td>

            <td>{{ $client->email }}</td>

            <td>{{ $client->phone }}</td>

            <td>

                <a href="{{ route('clients.edit', $client->id) }}"
                   class="btn btn-warning btn-sm">

                   Edit

                </a>

                <form action="{{ route('clients.destroy', $client->id) }}"
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