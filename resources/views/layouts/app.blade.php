<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Coming Soon')</title>

    {{-- TailwindCSS (via CDN for quick setup) --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
        }
    </style>

    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen justify-between">

    {{-- Page Content --}}
    <main class="flex-grow flex items-center justify-center">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="text-center py-4 text-sm opacity-80">
        &copy; {{ date('Y') }} My Blog. All rights reserved.
    </footer>
</body>
</html>
