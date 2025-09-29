<aside class="h-full flex flex-col md:h-screen md:sticky md:top-0">
    <div class="p-6 border-b border-gray-200">
        <a href="{{ route('dashboard') }}" class="block">
            <div class="flex items-center gap-x-3">
                {{-- Ikon Baru --}}
                <div class="flex-shrink-0">
                    <div class="flex items-center justify-center h-12 w-12 rounded-full bg-indigo-600 text-white">
                        {{-- Ganti dengan SVG logo Anda jika ada, atau gunakan inisial --}}
                        <span class="text-lg font-bold">S</span>
                    </div>
                </div>

                {{-- Teks Logo --}}
                <div>
                    <p class="text-base font-bold text-gray-800 leading-tight">
                        Sistem Pakar
                    </p>
                    <p class="text-sm font-medium text-indigo-600">
                        Penyakit Tulang
                    </p>
                </div>
            </div>
        </a>
    </div>
    <!-- Nav Links -->
    <nav class="flex-1 px-4 py-6 space-y-2">
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard', 'admin.dashboard', 'dokter.dashboard')">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>

            {{ __('Dashboard') }}
        </x-nav-link>

        {{-- Tampilkan menu ini jika rolenya 'admin' ATAU 'dokter' --}}
        {{-- Menu Khusus Admin --}}
        @if (Auth::user()->role == 'admin')
            <x-nav-link :href="route('admin.gejala.index')" :active="request()->routeIs('admin.gejala.*')">
                {{ __('Gejala') }}
            </x-nav-link>
            <x-nav-link :href="route('admin.penyakit.index')" :active="request()->routeIs('admin.penyakit.*')">
                {{ __('Penyakit') }}
            </x-nav-link>
            <x-nav-link :href="route('admin.dokter.index')" :active="request()->routeIs('admin.dokter.*')">
                {{ __('Dokter') }}
            </x-nav-link>
        @endif

        {{-- Menu Khusus Dokter --}}
        @if (Auth::user()->role == 'dokter')
            <x-nav-link :href="route('dokter.gejala.index')" :active="request()->routeIs('dokter.gejala.*')">
                {{ __('Gejala') }}
            </x-nav-link>
            <x-nav-link :href="route('dokter.penyakit.index')" :active="request()->routeIs('dokter.penyakit.*')">
                {{ __('Penyakit') }}
            </x-nav-link>
            <x-nav-link :href="route('dokter.rule.index')" :active="request()->routeIs('dokter.rule.*')">
                {{ __('Rule Base') }}
            </x-nav-link>
        @endif
        {{-- Navigasi Khusus Pengguna Biasa --}}

        @if (Auth::user()->role == 'pengguna')
            <x-nav-link :href="route('diagnosa.start')" :active="request()->routeIs('diagnosa.start')">
                {{ __('Mulai Diagnosa') }}
            </x-nav-link>
            <x-nav-link :href="route('diagnosa.riwayat')" :active="request()->routeIs('diagnosa.riwayat')">
                {{ __('Riwayat Diagnosa') }}
            </x-nav-link>
            <x-nav-link :href="route('diagnosa-backward.index')" :active="request()->routeIs('diagnosa-backward.*')">
                {{ __('Verifikasi Penyakit') }}
            </x-nav-link>
        @endif

    </nav>
    <!-- User Dropdown -->
    <div x-data="{ open: false }" class="px-4 py-4 border-t border-gray-200">
        <button @click="open = !open"
            class="w-full flex items-center justify-between px-4 py-2 text-sm font-medium text-left bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200">
            <span>{{ Auth::user()->name }}</span>
            <svg :class="{ 'rotate-180': open }" class="w-4 h-4 transform transition-transform" fill="none"
                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        <div x-show="open" x-cloak class="mt-2 space-y-1 bg-white rounded-lg shadow-inner text-sm text-gray-700">
            <a href="{{ route('profile.edit') }}"
                class="block px-4 py-2 hover:bg-gray-100 rounded-lg">{{ __('Profile') }}</a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="w-full text-left px-4 py-2 text-red-600 hover:text-red-700 hover:bg-red-50 rounded-lg">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</aside>
