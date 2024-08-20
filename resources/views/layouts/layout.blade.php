<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <title>{{ config('app.name', 'Il mio concessionario') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    @vite('resources/js/app.js')


</head>

<body>
    <div class="d-flex w-100">
        {{-- sidebar --}}
        @include('partials.sidebar')
        <main>
            @include('partials.navbar')
            <div class="main-content">
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>
