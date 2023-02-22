<x-app-layout>
    <div class="mt-4 h-full pt-4" id="main">
        <div id="main">
        </div>
    </div>
</x-app-layout>

<style>
    #main {
        background-image: url('https://image.tmdb.org/t/p/original{{ $movie->backdrop_path }}');
    }
</style>
