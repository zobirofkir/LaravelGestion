<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for scrollable card */
        .scrollable-card {
            max-height: 300px; /* Set the desired maximum height for the card */
            overflow-y: auto; /* Enable vertical scrolling when content overflows */
        }
    </style>
    <title>Task Management</title>
</head>
<body>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Wrap the card in a scrollable div -->
                <div class="scrollable-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Welcome to your dashboard</h4>
                            <p class="card-text">You can create, read, update, and delete tasks from this dashboard.</p> <br>
                            <a href="{{ route('dashboard') }}" class="btn btn-primary">Back to Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
