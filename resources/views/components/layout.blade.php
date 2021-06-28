<!doctype html>

<title>Minerva's Vault</title>
<link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >

<body>
    <header class="header">
    <a href="/"><img src="{{ asset('images/owl.svg') }}"/></a>
    </header>
    <div class="main">
        {{ $slot }}
    </div>
    <footer class="footer"></footer>
</body>