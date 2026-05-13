@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <h3 class="mb-4">
        Reports Dashboard
    </h3>

    <div class="row">

        <!-- Employees -->
        <div class="col-md-3 mb-3">

            <div class="card bg-primary text-white">

                <div class="card-body">

                    <h4>{{ $totalEmployees }}</h4>

                    <p>Total Employees</p>

                </div>

            </div>

        </div>

        <!-- Managers -->
        <div class="col-md-3 mb-3">

            <div class="card bg-success text-white">

                <div class="card-body">

                    <h4>{{ $totalManagers }}</h4>

                    <p>Total Managers</p>

                </div>

            </div>

        </div>

        <!-- Admins -->
        <div class="col-md-3 mb-3">

            <div class="card bg-dark text-white">

                <div class="card-body">

                    <h4>{{ $totalAdmins }}</h4>

                    <p>Total Admins</p>

                </div>

            </div>

        </div>

        <!-- Attendance -->
        <div class="col-md-3 mb-3">

            <div class="card bg-warning text-white">

                <div class="card-body">

                    <h4>{{ $presentToday }}</h4>

                    <p>Present Today</p>

                </div>

            </div>

        </div>

    </div>

    <!-- Second Row -->

    <div class="row">

        <!-- Pending Tasks -->
        <div class="col-md-3 mb-3">

            <div class="card border-primary">

                <div class="card-body">

                    <h4>{{ $pendingTasks }}</h4>

                    <p>Pending Tasks</p>

                </div>

            </div>

        </div>

        <!-- Completed Tasks -->
        <div class="col-md-3 mb-3">

            <div class="card border-success">

                <div class="card-body">

                    <h4>{{ $completedTasks }}</h4>

                    <p>Completed Tasks</p>

                </div>

            </div>

        </div>

        <!-- Running Projects -->
        <div class="col-md-3 mb-3">

            <div class="card border-warning">

                <div class="card-body">

                    <h4>{{ $runningProjects }}</h4>

                    <p>Running Projects</p>

                </div>

            </div>

        </div>

        <!-- Completed Projects -->
        <div class="col-md-3 mb-3">

            <div class="card border-dark">

                <div class="card-body">

                    <h4>{{ $completedProjects }}</h4>

                    <p>Completed Projects</p>

                </div>

            </div>

        </div>

    </div>

    <!-- Payroll Reports -->

    <div class="row">

        <div class="col-md-6 mb-3">

            <div class="card bg-success text-white">

                <div class="card-body">

                    <h4>{{ $paidPayrolls }}</h4>

                    <p>Paid Payrolls</p>

                </div>

            </div>

        </div>

        <div class="col-md-6 mb-3">

            <div class="card bg-danger text-white">

                <div class="card-body">

                    <h4>{{ $unpaidPayrolls }}</h4>

                    <p>Unpaid Payrolls</p>

                </div>

            </div>

        </div>

    </div>

    <!-- Sales Reports -->

    <div class="row">

        <div class="col-md-6 mb-3">

            <div class="card bg-info text-white">

                <div class="card-body">

                    <h4>{{ $totalTarget }}</h4>

                    <p>Total Sales Target</p>

                </div>

            </div>

        </div>

        <div class="col-md-6 mb-3">

            <div class="card bg-primary text-white">

                <div class="card-body">

                    <h4>{{ $totalAchieved }}</h4>

                    <p>Total Sales Achieved</p>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection