<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <div class="container">
            <h1>Pensart's simpele blog</h1>
            <p>Gemaakt met het Laravel PHP framework</p>
        </div>
    </header>
    <main class="container">
        @yield('content')
    </main>
    <footer>
        <div class="container">
            &copy;{{ date('Y') }}  Guy Pensart | <a href="/login">Login</a>
        </div>
    </footer>
</body>
</html>