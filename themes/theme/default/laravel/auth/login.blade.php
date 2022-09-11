<x-theme theme="default.laravel">

    <x-theme-auth-card>
        <x-slot name="logo">
            라라벨
            <a href="/">
                <x-theme-application-logo class="w-20 h-20 text-gray-500 fill-current" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-theme-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->

        <x-theme-auth-validation-errors class="mb-4" :errors="$errors" />


        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-theme-label for="email" :value="__('Email')" />

                <x-theme-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-theme-label for="password" :value="__('Password')" />

                <x-theme-input id="password" class="block w-full mt-1"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 rounded shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-theme-button class="ml-3">
                    {{ __('Log in') }}
                </x-theme-button>
            </div>
        </form>
    </x-theme-auth-card>

</x-theme>

