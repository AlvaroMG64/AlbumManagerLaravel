<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Album Manager')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f7fa;
        }
        .card {
            border-radius: 15px;
        }
        .container {
            padding-top: 40px;
            padding-bottom: 40px;
        }
        .badge-explicit {
            font-weight: 500;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.85rem;
        }
        .explicit-yes {
            background-color: #f8d7da;
            color: #842029;
        }
        .explicit-no {
            background-color: #d1e7dd;
            color: #0f5132;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">Album Manager</a>

            <div class="collapse navbar-collapse justify-content-end">
                @auth
                    <span class="navbar-text me-3">{{ auth()->user()->name }}</span>
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger btn-sm">Cerrar sesión</button>
                    </form>
                @endauth
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>