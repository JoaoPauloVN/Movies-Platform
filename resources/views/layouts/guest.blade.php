<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/7d35d1196a.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="select-none font-sans">
    <div class="min-h-screen bg-gray-100 p-5 py-20 dark:bg-gray-900 md:p-20">
        <div>
            <div
                class="absolute top-0 right-0 min-h-screen w-7/12 bg-[url('https://wallpaperaccess.com/full/314784.jpg')] bg-cover bg-center bg-blend-darken brightness-50">
            </div>
            <div
                class="absolute top-0 right-0 min-h-screen w-7/12 bg-neutral-900 bg-opacity-20 bg-gradient-to-r from-gray-900 to-transparent">
            </div>
        </div>
        <div class="relative z-20">
            <div class="flex items-center font-bold">
                <div class="mr-20 flex items-center text-neutral-300">
                    <div class="mr-3 h-8 w-8 rounded-full bg-blue-500"></div>
                    LOGO
                </div>
                <a href="#" class="text-neutral-500">Home</a>
            </div>
            <div class="mt-44 w-full px-4 md:w-[40rem]">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>
