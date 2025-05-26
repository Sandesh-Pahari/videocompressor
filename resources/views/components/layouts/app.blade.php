<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Meeting Room</title>
    @vite('resources/css/app.css') {{-- If you're using Vite + Tailwind --}}
    @livewireStyles
</head>
<body class="bg-gray-100 text-gray-900">

    <div class="container mx-auto p-6">
        @yield('content')
    </div>

    @livewireScripts
    @vite('resources/js/app.js') {{-- If you're using Vite --}}
</body>
</html>
