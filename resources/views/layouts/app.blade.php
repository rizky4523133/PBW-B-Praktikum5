<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SMP Mentari')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans text-gray-800">

    @include('layouts.partials.header')

    <main class="container mx-auto my-8 px-4">
        @yield('content')
    </main>

    @include('layouts.partials.footer')

</body>
</html>