<!doctype html>

<title>Minerva's Vault</title>
<link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >

<body>
    <header class="header">
        <a href="/"><img src="{{ asset('images/owl.svg') }}"/></a>
    </header>
    <nav class="nav">
        <a href="/new">New</a>
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