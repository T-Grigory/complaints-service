<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <ul class="navbar-nav me-auto">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Главная
                    </a>
                    <a class="navbar-brand" href="{{ url('/complaints') }}">
                        Обращения
                    </a>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <a class="btn btn-primary" href="{{url('/complaints/create')}}">
                        Создать обращение
                    </a>
                </ul>
            </div>
        </nav>
        <main class="container py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
