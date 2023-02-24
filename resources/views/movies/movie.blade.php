<x-app-layout>
    <div x-data="{ open: false }">
        <template class="mt-4 h-full" id="main" x-if="! open">
            <div id="main" class="h-[85vh]">
                <div class="relative h-full w-full rounded-2xl bg-gradient-to-t from-black via-black/75 to-transparent">
                    <div class="flex h-full w-full items-end p-12">
                        <div class="w-full">
                            <h1 class="text-6xl text-neutral-300">{{ $movie->title }}</h1>
                            <div class="mt-6 flex flex-col justify-between lg:flex-row">
                                <p class="text-lg text-yellow-300"><i class="fa-solid fa-star"></i>
                                    {{ number_format($movie->vote_average, 2) }}
                                    <span class="text-sm text-neutral-300">
                                        ({{ $movie->vote_count }} reviews)
                                    </span>
                                </p>

                                <p class="mt-2 items-center text-neutral-300 lg:mt-0">
                                    {{ intdiv($movie->runtime, 60) . 'h ' . $movie->runtime % 60 . 'm' }}
                                    |
                                    @foreach ($movie->genres as $genre)
                                        @if (!$loop->last)
                                            {{ $genre['name'] }},
                                        @else
                                            {{ $genre['name'] }}
                                        @endif
                                    @endforeach

                                    |

                                    {{ explode('-', $movie->release_date)[0] }}
                                </p>
                            </div>
                            <p class="mt-8 text-neutral-300 lg:mt-4">{{ $movie->overview }}</p>
                            <button
                                class="mt-16 rounded-2xl bg-blue-600 px-10 py-3 text-lg font-bold uppercase text-neutral-200 md:mt-8">
                                <i class="fa-solid fa-play"></i> Play Now</button>

                            @if (isset($movie->trailer))
                                <button @click="open = ! open"
                                    class="mt-6 ml-0 rounded-2xl bg-blue-600 px-10 py-3 text-lg font-bold uppercase text-neutral-200 lg:mt-16 lg:ml-6">
                                    <i class="fa-solid fa-play"></i> Trailer</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </template>

        @if (isset($movie->trailer))
            <template class="h-[85vh] w-full rounded-2xl" x-if="open">
                <div class="relative h-full w-full">
                    <div class="absolute h-full w-full opacity-0 hover:opacity-100">
                        <button class="mt-16 ml-4 p-4 text-neutral-400" @click="open = !open"><i
                                class="fa-solid fa-arrow-left fa-lg"></i></button>
                    </div>
                    <iframe width="{{ $movie->trailer['size'] }}" class="h-[85vh] w-full rounded-2xl"
                        src="https://www.youtube.com/embed/{{ $movie->trailer['key'] }}?controls=0&autoplay=1"
                        frameborder="0" allow="autoplay;" allowfullscreen></iframe>
                </div>
            </template>
        @endif



        <div class="mt-10">
            <div>
                <h1 class="mb-6 text-2xl text-neutral-400">Recomendations</h1>
                <div class="grid w-full grid-cols-2 gap-4 gap-y-6 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5">
                    @foreach ($movie->recomendations as $recomendation)
                        <x-movie-item :movie="$recomendation" class="min-h-full w-[15rem]"></x-movie-item>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    #main {
        border-radius: 1rem;
        background-image: url('https://image.tmdb.org/t/p/original{{ $movie->backdrop_path }}');
        background-position: center;
        background-size: cover;
    }

    .carousel::-webkit-scrollbar {
        width: 8px;
        background: transparent;
    }

    /* Handle */
    .carousel::-webkit-scrollbar-thumb {
        background: rgb(30, 30, 50);
        border-radius: 10px;
    }

    /* Handle on hover */
    .carousel::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
</style>
