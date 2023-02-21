<x-guest-layout>
    <div>
        <h1 class="text-5xl text-white">Create new account</h1>
        <p class="mt-8 mb-6 text-base text-gray-400">
            Already have an account?
            <a class="rounded-md text-base text-blue-600 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                Log in
            </a>
        </p>
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="grid grid-cols-1 gap-y-3 gap-x-6 md:grid-cols-2">
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="mt-1 block w-full" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="surname" :value="__('Surname')" />
                <x-text-input id="surname" class="mt-1 block w-full" type="text" name="surname" :value="old('surname')"
                    required autocomplete="surname" />
                <x-input-error :messages="$errors->get('surname')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="col-span-1 md:col-span-2">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')"
                    required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="col-span-1 md:col-span-2">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="mt-1 block w-full" type="password" name="password" required
                    autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="col-span-1 mt-4 flex justify-end md:col-span-2">
                <x-primary-button>
                    {{ __('Register') }}
                </x-primary-button>
            </div>

        </div>
    </form>
</x-guest-layout>
