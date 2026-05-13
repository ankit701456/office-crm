@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-header">

        <h4>Create Client</h4>

    </div>

    <div class="card-body">

        <form action="{{ route('clients.store') }}"
              method="POST">

            @csrf

            <div class="mb-3">

                <label>Name</label>

                <input type="text"
                       name="name"
                       class="form-control">

            </div>

            <div class="mb-3">

                <label>Email</label>

                <input type="email"
                       name="email"
                       class="form-control">

            </div>

            <div class="mb-3">

                <label>Phone</label>

                <input type="text"
                       name="phone"
                       class="form-control">

            </div>

       

            <div class="mb-3">

                <label>Address</label>

                <textarea name="address"
                          class="form-control"></textarea>

            </div>

            <button class="btn btn-success">

                Save Client

            </button>

        </form>

    </div>

</div>

@endsection