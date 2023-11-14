@extends('layouts.signup')

<head>
    <!-- Add Bootstrap CSS (you should replace these links with the actual Bootstrap CDN or local file paths) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    @include('errors.errors')
    @if (session('message'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container" style="margin-top:130px">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">

                    <div class="card-header">Login</div>

                    <div class="card-body">
                        {{-- <form  action="{{ url('/dashboard') }}" method="POST"> --}}
                        <form action="{{ url('/dashboard') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JavaScript (you should replace this link with the actual Bootstrap CDN or local file path) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
