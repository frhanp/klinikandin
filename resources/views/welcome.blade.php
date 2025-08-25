<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Klinik Andin - Sistem Pakar Penyakit Tulang</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-gray-50 text-gray-800">
    <div class="flex flex-col min-h-screen">

        {{-- resources/views/welcome.blade.php --}}

        <header class="absolute inset-x-0 top-0 z-50 bg-white/95 backdrop-blur-sm shadow-sm ring-1 ring-gray-900/5">
            <nav class="flex items-center justify-between p-6 lg:px-8 max-w-7xl mx-auto" aria-label="Global">
                {{-- LOGO DI KIRI --}}
                <div class="flex lg:flex-1">
                    <a href="/" class="-m-1.5 p-1.5">
                        <span class="text-xl font-bold text-indigo-600">Klinik Andin</span>
                    </a>
                </div>
                
                {{-- SEMUA LINK NAVIGASI DI KANAN --}}
                <div class="hidden lg:flex lg:items-center lg:gap-x-6">
                    <a href="{{ route('kontak') }}" class="text-sm font-semibold leading-6 text-gray-900 hover:text-indigo-600">Kontak</a>
        
                    @if (Route::has('login'))
                        {{-- Garis Pemisah Vertikal --}}
                        <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                        
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm font-semibold leading-6 text-gray-900 hover:text-indigo-600">Dashboard <span aria-hidden="true">&rarr;</span></a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm font-semibold leading-6 text-gray-900 hover:text-indigo-600">Log in <span aria-hidden="true">&rarr;</span></a>
                        @endauth
                    @endif
                </div>
            </nav>
        </header>

        <main class="flex-grow">
            <div class="relative bg-white">
                <div class="mx-auto max-w-7xl">
                    <div class="relative z-10 lg:w-full lg:max-w-2xl">
                        {{-- Efek gradasi di samping --}}
                        <svg class="absolute inset-y-0 right-8 hidden h-full w-80 translate-x-1/2 transform fill-white lg:block"
                            viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                            <polygon points="0,0 90,0 50,100 0,100" />
                        </svg>

                        <div class="relative py-32 px-6 sm:py-40 lg:py-56 lg:px-8 lg:pr-0">
                            <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">
                                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Sistem Pakar
                                    Diagnosa Penyakit Tulang</h1>
                                <p class="mt-6 text-lg leading-8 text-gray-600">Dapatkan diagnosa awal untuk keluhan
                                    terkait kesehatan tulang Anda dengan cepat dan akurat berdasarkan pengetahuan para
                                    ahli.</p>
                                <div class="mt-10 flex items-center gap-x-6">
                                    <a href="{{ route('login') }}"
                                        class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Mulai
                                        Diagnosa</a>
                                    <a href="#features" class="text-sm font-semibold leading-6 text-gray-900">Pelajari
                                        Lebih Lanjut <span aria-hidden="true">→</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Kolom Gambar --}}
                <div class="bg-gray-50 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                    <img class="aspect-[3/2] object-cover lg:aspect-auto lg:h-full lg:w-full"
                        src="https://images.unsplash.com/photo-1527613426441-4da17471b66d?q=80&w=2067&auto=format&fit=crop"
                        alt="Dokter memeriksa hasil rontgen">
                </div>
            </div>

            <section id="features" class="bg-white py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl lg:text-center">
                        <h2 class="text-base font-semibold leading-7 text-indigo-600">Layanan Kami</h2>
                        <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Semua yang Anda
                            Butuhkan untuk Diagnosa Awal</p>
                        <p class="mt-6 text-lg leading-8 text-gray-600">
                            Sistem kami dirancang untuk memberikan kemudahan dan informasi yang akurat, membantu Anda
                            memahami kondisi kesehatan tulang Anda lebih baik.
                        </p>
                    </div>
                    <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                        <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                            {{-- Feature 1 --}}
                            <div class="relative pl-16">
                                <dt class="text-base font-semibold leading-7 text-gray-900">
                                    <div
                                        class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.184m-1.5.184a6.01 6.01 0 01-1.5-.184m3.75 7.484V10.5m-3.75 7.484a6.01 6.01 0 01-1.5-.184m1.5.184a6.01 6.01 0 001.5-.184m-3.75 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm-2.25-2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15m0-4.5h.008v.008h-.008v-.008zm0-2.25h.008v.008h-.008V8.25" />
                                        </svg>
                                    </div>
                                    Diagnosa Berbasis Gejala
                                </dt>
                                <dd class="mt-2 text-base leading-7 text-gray-600">Pilih gejala-gejala yang Anda alami
                                    dari daftar yang komprehensif untuk memulai proses diagnosa.</dd>
                            </div>
                            {{-- Feature 2 --}}
                            <div class="relative pl-16">
                                <dt class="text-base font-semibold leading-7 text-gray-900">
                                    <div
                                        class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M10.5 6a7.5 7.5 0 100 15 7.5 7.5 0 000-15z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 21l-5.197-5.197" />
                                        </svg>
                                    </div>
                                    Akurasi Tinggi
                                </dt>
                                <dd class="mt-2 text-base leading-7 text-gray-600">Sistem kami menggunakan basis
                                    pengetahuan yang disusun oleh para ahli untuk memberikan hasil yang dapat
                                    diandalkan.</dd>
                            </div>
                            {{-- Feature 3 --}}
                            <div class="relative pl-16">
                                <dt class="text-base font-semibold leading-7 text-gray-900">
                                    <div
                                        class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                    </div>
                                    Informasi & Solusi
                                </dt>
                                <dd class="mt-2 text-base leading-7 text-gray-600">Dapatkan deskripsi lengkap mengenai
                                    penyakit serta saran penanganan awal dari hasil diagnosa Anda.</dd>
                            </div>
                            {{-- Feature 4 --}}
                            <div class="relative pl-16">
                                <dt class="text-base font-semibold leading-7 text-gray-900">
                                    <div
                                        class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    Riwayat Diagnosa
                                </dt>
                                <dd class="mt-2 text-base leading-7 text-gray-600">Semua hasil diagnosa Anda tersimpan
                                    dengan aman dan dapat diakses kembali kapan saja melalui riwayat Anda.</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </section>
        </main>

        <footer class="bg-gray-900 text-white">
            <div class="mx-auto max-w-7xl px-6 py-12 md:flex md:items-center md:justify-between lg:px-8">
                <div class="mt-8 md:order-1 md:mt-0">
                    <p class="text-center text-xs leading-5 text-gray-400">&copy; {{ date('Y') }} Klinik Andin. All
                        rights reserved.</p>
                </div>
            </div>
        </footer>

    </div>
</body>

</html>
