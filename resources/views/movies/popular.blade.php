<x-app-layout>
    <div class="mt-4 h-full pt-4" id="main">
        <h2 class="mb-6 text-3xl text-neutral-300">Popular Movies</h2>
        <div class="grid w-full grid-cols-2 gap-4 gap-y-6 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5">
            @foreach ($movies as $movie)
                <div
                    class="cursor-pointer rounded-lg bg-neutral-800 shadow shadow-neutral-800 duration-100 hover:scale-105">
                    <img class="rounded-lg rounded-b-none"
                        src="https://image.tmdb.org/t/p/original{{ $movie->poster_path }}"
                        alt="{{ $movie->original_title }}">
                    <div class="p-4 py-6">
                        <p class="mb-2 text-yellow-300"><i class="fa-solid fa-star"></i>
                            {{ $movie->vote_average }} <span class="text-xs text-neutral-300">({{ $movie->vote_count }}
                                reviews)</span></p>
                        <p class="text-lg font-bold text-neutral-300">{{ $movie->title }}</p>
                    </div>
                </div>
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
