@include("layouts.header")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS styles can be added here */
        .container {
            margin-top: 5rem;
        }

        .card {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center">Task Management</h1>
    <form action="{{ route('GetTasks') }}" method="GET">
        @foreach($tasks as $task)
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">{{ $task->name }}</h2>
                    <p class="card-text">Date: {{ $task->date }}</p>
                    <p class="card-text">Status: {{ $task->status }}</p>
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-primary" href="{{ url('/update/' . $task->id) }}">Update Task</a>
                    </div>
                    <br>
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-danger" href="{{ url('/delete/' . $task->id) }}">Delete Task</a>
                    </div>
                </div>
            </div>
        @endforeach
    </form>
</div>

<!-- Add Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
