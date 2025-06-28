<x-guest-layout>
    <!-- Judul Form -->
    <div class="mb-6 text-center">
        <h2 class="text-2xl font-bold text-gray-800">Selamat Datang Kembali</h2>
        <p class="text-sm text-gray-500">Silakan masuk untuk melanjutkan</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <div class="flex items-center justify-between">
                <x-input-label for="password" :value="__('Password')" />
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Lupa password?') }}
                    </a>
                @endif
            </div>

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Ingat saya') }}</span>
            </label>
        </div>

        <div class="flex flex-col items-center mt-6">
            <x-primary-button class="w-full flex justify-center">
                {{ __('Masuk') }}
            </x-primary-button>
            
            @if (Route::has('register'))
                <p class="mt-4 text-sm text-gray-600">
                    Belum punya akun?
                    <a class="underline text-indigo-600 hover:text-indigo-800" href="{{ route('register') }}">
                        {{ __('Daftar di sini') }}
                    </a>
                </p>
            @endif
        </div>
    </form>
</x-guest-layout>