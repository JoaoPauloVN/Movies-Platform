<x-app-layout>
    <div class="mt-4 h-full pt-4" id="main">
        <h2 class="mb-6 text-3xl text-neutral-300">Top Rated Movies</h2>
        <div class="grid w-full grid-cols-2 gap-4 gap-y-6 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5">
            @foreach ($movies as $movie)
                <x-movie-item :movie="$movie"></x-movie-item>
            @endforeach
        </div>
    </div>
</x-app-layout>

<style>
    #main::-webkit-scrollbar {
        width: 8px;
        background: transparent;
    }

    /* Handle */
    #main::-webkit-scrollbar-thumb {
        background: rgb(30, 30, 30);
        border-radius: 10px;
    }

    /* Handle on hover */
    #main::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
</style>
