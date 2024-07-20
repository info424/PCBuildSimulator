<!DOCTYPE html>
<html>
<head>
    <title>Build Your Own PC</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Build Your Own PC</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="{{ route('components.index') }}">Components</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('pcbuilds.create') }}">Build PC</a></li>
        </ul>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>
</body>
</html>
