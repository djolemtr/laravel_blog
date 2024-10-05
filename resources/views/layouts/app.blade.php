<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Blog</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Include your CSS -->
</head>
<body>
    <header>
        <h1>Djole Blog</h1>
        <nav>
            <ul>
                <li><a href="{{ route('posts.index') }}">Home</a></li>
                @if (Auth::check())
                    <li><a href="{{ route('posts.create') }}">Create Post</a></li>
                    <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @endif
            </ul>
        </nav>
    </header>

    <main>
        @yield('content') <!-- This is where child views will be injected -->
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Laravel Blog. All rights reserved.</p>
    </footer>
</body>
</html>

