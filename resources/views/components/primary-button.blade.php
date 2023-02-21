<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'shadow shadow-blue-700 inline-flex items-center px-10 py-3 bg-blue-600 border border-transparent rounded-full font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-800 focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
