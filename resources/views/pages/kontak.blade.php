{{-- resources/views/pages/kontak.blade.php --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontak Kami - Klinik Andin</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-gray-50 text-gray-800">
    <div class="min-h-screen flex flex-col">

        {{-- resources/views/pages/kontak.blade.php --}}

        {{-- resources/views/pages/kontak.blade.php --}}

        {{-- Ganti tag <header> yang lama dengan yang ini --}}
        <header class="bg-white/95 backdrop-blur-sm shadow-sm ring-1 ring-gray-900/5">
            <nav class="flex items-center justify-between p-6 lg:px-8 max-w-7xl mx-auto" aria-label="Global">
                {{-- LOGO DI KIRI --}}
                <div class="flex lg:flex-1">
                    <a href="/" class="-m-1.5 p-1.5">
                        <span class="text-xl font-bold text-indigo-600">Klinik Andin</span>
                    </a>
                </div>

                {{-- SEMUA LINK NAVIGASI DI KANAN --}}
                <div class="hidden lg:flex lg:items-center lg:gap-x-6">
                    {{-- Link Kontak ditandai aktif dengan warna indigo --}}
                    <a href="{{ route('kontak') }}" class="text-sm font-semibold leading-6 text-indigo-600">Kontak</a>

                    @if (Route::has('login'))
                        {{-- Garis Pemisah Vertikal --}}
                        <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>

                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="text-sm font-semibold leading-6 text-gray-900 hover:text-indigo-600">Dashboard <span
                                    aria-hidden="true">&rarr;</span></a>
                        @else
                            <a href="{{ route('login') }}"
                                class="text-sm font-semibold leading-6 text-gray-900 hover:text-indigo-600">Log in <span
                                    aria-hidden="true">&rarr;</span></a>
                        @endauth
                    @endif
                </div>
            </nav>
        </header>

        <main class="flex-grow">
            {{-- Bagian ini sudah disesuaikan dengan tema warna proyek (Indigo & Gray) --}}
            <div class="bg-white">
                <section class="py-20 md:py-28 px-4">
                    <div class="max-w-5xl mx-auto">

                        {{-- Judul Halaman --}}
                        <div class="text-center mb-16">
                            <h2 class="text-4xl md:text-5xl font-bold tracking-tight text-gray-900">
                                Kontak & Lokasi Praktek
                            </h2>
                            <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
                                Temukan alamat praktek kami yang terdekat dengan Anda.
                            </p>
                        </div>

                        {{-- Grid untuk menampilkan alamat --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                            @foreach ($kontakDokter as $kontak)
                                <div
                                    class="bg-gray-50 rounded-xl shadow-lg p-6 flex space-x-6 transition-all duration-300 ease-in-out hover:shadow-xl hover:-translate-y-1 ring-1 ring-gray-200">
                                    {{-- Ikon --}}
                                    <div
                                        class="flex-shrink-0 bg-indigo-100 text-indigo-600 rounded-lg w-14 h-14 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-7">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                                        </svg>
                                    </div>

                                    {{-- Detail Alamat --}}
                                    <div class="flex flex-col justify-between">
                                        <div>
                                            <h3 class="text-lg font-bold text-gray-900">{{ $kontak['nama'] }}</h3>
                                            <p class="mt-1 text-gray-600 leading-relaxed">{{ $kontak['alamat'] }}</p>
                                            <p class="mt-2 text-sm text-gray-500">Telp: {{ $kontak['telepon'] }}</p>
                                        </div>

                                        {{-- Link Google Maps --}}
                                        <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($kontak['alamat']) }}"
                                            target="_blank"
                                            class="mt-3 text-sm font-semibold text-indigo-600 hover:text-indigo-500 inline-flex items-center">
                                            Lihat di Peta
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="2" stroke="currentColor" class="w-4 h-4 ml-1">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                </section>
            </div>
        </main>

        <footer class="bg-gray-900 text-white">
            <div class="mx-auto max-w-7xl px-6 py-12 md:flex md:items-center md:justify-between lg:px-8">
                <div class="mt-8 md:order-1 md:mt-0">
                    <p class="text-center text-xs leading-5 text-gray-400">© {{ date('Y') }} Klinik Andin. All
                        rights reserved.</p>
                </div>
            </div>
        </footer>

    </div>
</body>

</html>
