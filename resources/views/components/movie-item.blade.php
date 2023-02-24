@props(['movie'])

<a href="{{ route('movie.show', $movie->id) }}"
    {{ $attributes->merge(['class' => 'block w-full cursor-pointer rounded-lg bg-gray-800 shadow shadow-neutral-800 duration-100 hover:scale-105']) }}>
    <img class="rounded-lg rounded-b-none" src="https://image.tmdb.org/t/p/original{{ $movie->poster_path }}"
        alt="{{ $movie->original_title }}">
    <div class="p-4 py-6">
        <p class="mb-2 text-yellow-300"><i class="fa-solid fa-star"></i>
            {{ number_format($movie->vote_average, 2) }} <span class="text-xs text-neutral-300">({{ $movie->vote_count }}
                reviews)</span></p>
        <p class="text-lg font-bold text-neutral-300">{{ $movie->title }}</p>
    </div>
</a>
