@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h4>Add Employee</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('employees.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="row">

                    <!-- Name -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            Name
                        </label>

                        <input type="text"
                               name="name"
                               class="form-control"
                               required>
                    </div>

                    <!-- Email -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            Email
                        </label>

                        <input type="email"
                               name="email"
                               class="form-control"
                               required>
                    </div>

                    <!-- Password -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            Password
                        </label>

                        <input type="password"
                               name="password"
                               class="form-control"
                               required>
                    </div>

                    <!-- Phone -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            Phone
                        </label>

                        <input type="text"
                               name="phone"
                               class="form-control">
                    </div>

                    <!-- Designation -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            Designation
                        </label>

                        <input type="text"
                               name="designation"
                               class="form-control">
                    </div>

                    <!-- Salary -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            Salary
                        </label>

                        <input type="number"
                               name="salary"
                               class="form-control">
                    </div>

                    <!-- Joining Date -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            Joining Date
                        </label>

                        <input type="date"
                               name="joining_date"
                               class="form-control">
                    </div>

                    <!-- Role -->
                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Role
                        </label>

                        <select name="role"
                                class="form-control"
                                required>

                            <option value="">
                                Select Role
                            </option>

                            @foreach($roles as $role)

                                <option value="{{ $role->name }}">
                                    {{ $role->name }}
                                </option>

                            @endforeach

                        </select>

                    </div>

                    <!-- Profile Image -->
                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Profile Image
                        </label>

                        <input type="file"
                               name="profile_image"
                               class="form-control">

                    </div>

                    <!-- Address -->
                    <div class="col-md-12 mb-3">

                        <label class="form-label">
                            Address
                        </label>

                        <textarea name="address"
                                  class="form-control"
                                  rows="3"></textarea>

                    </div>

                </div>

                <button type="submit"
                        class="btn btn-success">

                    Save Employee

                </button>

                <a href="{{ route('employees.index') }}"
                   class="btn btn-secondary">

                    Back

                </a>

            </form>

        </div>

    </div>

</div>

@endsection