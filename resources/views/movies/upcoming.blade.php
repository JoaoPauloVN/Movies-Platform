<x-app-layout>
    <div class="mt-4 h-full pt-4" id="main">
        <h2 class="mb-6 text-3xl text-neutral-300">Upcoming Movies</h2>
        <div class="grid w-full grid-cols-2 gap-4 gap-y-6 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5">
            @foreach ($movies as $movie)
                <x-movie-item :movie="$movie"></x-movie-item>
            @endforeach
        </div>
        <div class="mt-4 flex justify-end">

            <a href="" disabled
                class="mr-3 inline-flex items-center rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                <svg aria-hidden="true" class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                Previous
            </a>
            <a href="#"
                class="inline-flex items-center rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Next
                <svg aria-hidden="true" class="ml-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
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
