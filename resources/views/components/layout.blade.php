<!doctype html>

<title>Minerva's Vault</title>
<link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >

<body>
    <header class="header">
        <a href="/"><img src="{{ asset('images/owl.svg') }}"/></a>
    </header>
    <nav class="nav">
        <a href="/new">New</a>
        @auth
            <span>Welcome, {{ auth()->user()->name }}</span>
            <form method="POST" action="/logout">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @else
            <a href="/register">Register</a>
            <a href="/login">Login</a>
        @endauth
    </nav>
    <div class="main">
        {{ $slot }}
    </div>

    @if (session()->has('success'))
        <div>{{ session('success') }}</div>
    @endif

    <footer class="footer">
        <p>&#169; 2021</p>
    </footer>
</body>