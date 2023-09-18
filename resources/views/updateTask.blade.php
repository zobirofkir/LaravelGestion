@include("layouts.header")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update-Task</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('css/main.css') }}" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center">Task Form</h1>
            <form action="{{route('updateTasks',  ['id' => $GetEdit->id]) }})}}" method="POST">
                @csrf
                <div class="mb-3">
                @error('name')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$GetEdit->name}}" placeholder="Enter your name">
                </div>
                <div class="mb-3">
                @error('email')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" value="{{$GetEdit->email}}" id="email" name="email" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                @error('date')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror

                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" value="{{$GetEdit->date}}" id="date" name="date">
                </div>
                <div class="mb-3">
                @error('status')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
                    <label for="status" class="form-label">Status</label>
                    <input type="text" value="{{$GetEdit->status}}" class="form-control" id="status" name="status" placeholder="Enter the status">
                </div>
                <button type="submit" class="btn btn-dark">Update</button>
            </form>
        </div>
    </div>
</div>


<!-- Add Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
