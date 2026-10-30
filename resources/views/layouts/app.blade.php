<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Website Portfolio')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('build/css/style.css') }}">
</head>
<body class="flex flex-col min-h-screen">

    {{-- Memanggil Navbar --}}
    @include('partials.navbar')

    {{-- Tempat Konten Utama dari setiap halaman --}}
    <main class="flex-grow">
        @yield('content')
    </main>

    {{-- Memanggil Footer --}}
    @include('partials.footer')

</body>
</html>