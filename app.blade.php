<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Salon Appointments</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <h1 class="logo">Salon Appointments</h1>
            <nav>
                <a href="{{ route('appointments.index') }}">Appointments</a>
                <a href="{{ route('appointments.create') }}" class="btn">New</a>
            </nav>
        </div>
    </header>
    <main class="container">
        @if(session('success'))
            <div class="alert success">{{ session('success') }}</div>
        @endif

        @yield('content')
    </main>
    <footer class="site-footer">
        <div class="container">© {{ date('Y') }} Salon</div>
    </footer>
</body>
</html>
