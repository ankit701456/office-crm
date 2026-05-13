<!DOCTYPE html>
<html>
<head>
    <title>Office CRM</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
    <div class="row">

        <div class="col-md-2 bg-dark text-white min-vh-100">
            <h3 class="mt-3">Office CRM</h3>

            <ul class="nav flex-column mt-4">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link text-white">Dashboard</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('employees.index') }}" class="nav-link text-white">Employees</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('teams.index') }}" class="nav-link text-white">Teams</a>
                </li>
                                <li class="nav-item">
                    <a href="{{ route('clients.index') }}" class="nav-link text-white">Clients</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('projects.index') }}" class="nav-link text-white">Projects</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('tasks.index') }}" class="nav-link text-white">Tasks</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('attendances.index') }}" class="nav-link text-white">Attendance</a>
                </li>
                <li class="nav-item">

                    <a href="{{ route('reports.index') }}"
                    class="nav-link text-white">

                        Reports

                    </a>

                </li>
            </ul>
        </div>

        <div class="col-md-10 p-4">
            @yield('content')
        </div>

    </div>
</div>

</body>
</html>