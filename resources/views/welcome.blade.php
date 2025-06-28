<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Klinik Andin - Sistem Pakar Penyakit Tulang</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="antialiased bg-gray-50 text-gray-800">
    <div class="relative min-h-screen flex flex-col">

        <!-- Header -->
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="/" class="-m-1.5 p-1.5">
                        <span class="text-xl font-bold text-indigo-600">Klinik Andin</span>
                    </a>
                </div>
                <div class="flex lg:flex-1 justify-end">
                    @if (Route::has('login'))
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
            <!-- Hero Section -->
            <div class="relative isolate px-6 pt-14 lg:px-8">
                <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                    <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#80ffc5] to-[#7c3aed] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                </div>
                <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                    <div class="text-center">
                        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Sistem Pakar Diagnosa Penyakit Tulang</h1>
                        <p class="mt-6 text-lg leading-8 text-gray-600">Dapatkan diagnosa awal untuk keluhan terkait kesehatan tulang Anda dengan cepat dan akurat berdasarkan pengetahuan para ahli.</p>
                        <div class="mt-10 flex items-center justify-center gap-x-6">
                            <a href="{{ route('login') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Mulai Diagnosa</a>
                            <a href="#features" class="text-sm font-semibold leading-6 text-gray-900">Pelajari Lebih Lanjut <span aria-hidden="true">→</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features Section -->
            <section id="features" class="bg-white py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl lg:text-center">
                        <h2 class="text-base font-semibold leading-7 text-indigo-600">Layanan Kami</h2>
                        <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Semua yang Anda Butuhkan untuk Diagnosa Awal</p>
                        <p class="mt-6 text-lg leading-8 text-gray-600">
                           Sistem kami dirancang untuk memberikan kemudahan dan informasi yang akurat, membantu Anda memahami kondisi kesehatan tulang Anda lebih baik.
                        </p>
                    </div>
                    <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                        <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                            <div class="relative pl-16">
                                <dt class="text-base font-semibold leading-7 text-gray-900">
                                    <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.184m-1.5.184a6.01 6.01 0 01-1.5-.184m3.75 7.484V10.5m-3.75 7.484a6.01 6.01 0 01-1.5-.184m1.5.184a6.01 6.01 0 001.5-.184m-3.75 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm-2.25-2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15m0-4.5h.008v.008h-.008v-.008zm0-2.25h.008v.008h-.008V8.25" />
                                        </svg>
                                    </div>
                                    Diagnosa Berbasis Gejala
                                </dt>
                                <dd class="mt-2 text-base leading-7 text-gray-600">Pilih gejala-gejala yang Anda alami dari daftar yang komprehensif untuk memulai proses diagnosa.</dd>
                            </div>
                            <div class="relative pl-16">
                                <dt class="text-base font-semibold leading-7 text-gray-900">
                                    <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                         <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 100 15 7.5 7.5 0 000-15z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197" />
                                        </svg>
                                    </div>
                                    Akurasi Tinggi
                                </dt>
                                <dd class="mt-2 text-base leading-7 text-gray-600">Sistem kami menggunakan basis pengetahuan yang disusun oleh para ahli untuk memberikan hasil dengan tingkat kecocokan yang dapat diandalkan.</dd>
                            </div>
                            <div class="relative pl-16">
                                <dt class="text-base font-semibold leading-7 text-gray-900">
                                    <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                        </svg>
                                    </div>
                                    Informasi & Solusi
                                </dt>
                                <dd class="mt-2 text-base leading-7 text-gray-600">Tidak hanya hasil diagnosa, Anda juga akan mendapatkan deskripsi lengkap mengenai penyakit serta saran penanganan awal.</dd>
                            </div>
                            <div class="relative pl-16">
                                <dt class="text-base font-semibold leading-7 text-gray-900">
                                    <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    Riwayat Diagnosa
                                </dt>
                                <dd class="mt-2 text-base leading-7 text-gray-600">Semua hasil diagnosa Anda tersimpan dengan aman dan dapat diakses kembali kapan saja melalui halaman riwayat Anda.</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white">
            <div class="mx-auto max-w-7xl px-6 py-12 md:flex md:items-center md:justify-between lg:px-8">
                <div class="mt-8 md:order-1 md:mt-0">
                    <p class="text-center text-xs leading-5 text-gray-400">&copy; {{ date('Y') }} Klinik Andin. All rights reserved.</p>
                </div>
            </div>
        </footer>

    </div>
</body>
</html>
