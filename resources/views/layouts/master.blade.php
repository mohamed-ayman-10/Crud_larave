<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    {{-- Start Navbar --}}
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container py-2">
            <a class="navbar-brand text-light" href="{{ url('/') }}">CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ url('/add') }}">Create New User</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1 class="text-center my-5 py-3 text-light container bg-primary">@yield('title')</h1>
    <hr>
    {{-- End Navbar --}}
    @yield('content')

</body>

</html>
