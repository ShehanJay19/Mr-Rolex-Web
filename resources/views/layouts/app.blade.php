<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Clothing Shop') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FFFFFF] text-[#111111] font-sans antialiased">
    <x-navbar />
   <main class="max-w-[1280px] mx-auto px-4 py-20">
    @yield('content')
</main>
    <x-footer />
</body>
</html>