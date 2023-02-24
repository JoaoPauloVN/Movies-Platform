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

<body class="bg-gray-100 font-sans antialiased dark:bg-gray-900">
    <div class="main flex min-h-screen">
        <div class="fixed h-full w-[18rem] border-r-2 border-black/25 p-10 py-8">
            <div class="mt-2 mr-20 flex items-center text-neutral-300">
                <div class="mr-3 h-8 w-8 rounded-full bg-blue-500"></div>
                LOGO
            </div>

            <div class="mt-12 flex flex-col text-base text-neutral-300">
                <h2 class="text-sm text-neutral-500">Movies</h2>

                <x-sidebar-item route="movies.popular" icon="fa-solid fa-fire-flame-curved" title="Popular">
                </x-sidebar-item>
                <x-sidebar-item route="movies.top_rated" icon="fa-solid fa-star" title="Top Rated"></x-sidebar-item>
                <x-sidebar-item route="movies.upcoming" icon="fa-regular fa-clock" title="Upcoming"></x-sidebar-item>
            </div>

            <div class="absolute bottom-6">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="text-neutral-300"><i class="fa-solid fa-arrow-right-from-bracket"></i> Log
                        Out</button>
                </form>
            </div>
        </div>
        <div class="mx-auto ml-[18rem] min-h-screen w-full pt-8 sm:px-8 lg:px-12">
            <div class="flex justify-between">
                <x-text-input id="email" class="mt-1 block w-[22rem] bg-neutral-800" type="email" name="email"
                    :value="old('email')" autofocus autocomplete="username" />

                <div class="flex items-center text-neutral-300">
                    <i class="fa-solid fa-bell fa-lg mr-4"></i>
                    <a href="{{ route('profile.edit') }}">
                        <i class="fa-solid fa-circle-user fa-xl"></i> {{ Auth::user()->name }}
                    </a>
                </div>
            </div>
            <main class="mt-10 pb-8">
                {{ $slot }}
            </main>
        </div>

    </div>
</body>

</html>

<style>
    html::-webkit-scrollbar {
        width: 8px;
        background: transparent;
    }

    /* Handle */
    html::-webkit-scrollbar-thumb {
        background: rgb(30, 30, 50);
        border-radius: 10px;
    }

    /* Handle on hover */
    html::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
</style>
