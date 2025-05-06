<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>@yield('title')</title>
</head>

{{-- <body>
    <div class="min-h-full">

        @yield('header')

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                @yield('content')
            </div>
        </main>

    </div>

</body> --}}

{{-- <body class="min-h-screen flex flex-col bg-gray-50">
    <!-- Header/Navbar -->
    <x-navbar></x-navbar>

    <!-- Main Content -->
    <main class="flex-1">
        @yield('content')
    </main>

    <!-- Footer -->
    <x-footer></x-footer>
</body> --}}


<body class="min-h-screen flex flex-col bg-gray-50">
    <x-navbar></x-navbar>

    {{-- Header Section --}}
    @yield('header')

    {{-- Main Content --}}
    <main class="flex-1">
        @yield('content')
    </main>

    <x-footer></x-footer>
</body>

</html>
