<x-guest-layout>
    <!-- Judul & Deskripsi -->
    <div class="mb-6 text-center">
        <h2 class="text-2xl font-bold text-gray-800">Lupa Password Anda?</h2>
        <p class="text-sm text-gray-500 mt-2">Jangan khawatir. Masukkan email Anda dan kami akan mengirimkan link untuk mengatur ulang password Anda.</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex flex-col items-center mt-6">
            <x-primary-button class="w-full flex justify-center">
                {{ __('Kirim Link Reset Password') }}
            </x-primary-button>
            
            <a class="mt-4 underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Kembali ke Login') }}
            </a>
        </div>
    </form>
</x-guest-layout>