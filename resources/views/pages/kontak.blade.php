<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontak Kami - Sistem Pakar</title>
    <meta name="description" content="Lokasi praktek dan kontak dokter Klinik Andin.">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .link-underline {
            background: linear-gradient(to right, rgb(79 70 229), rgb(79 70 229)) left bottom/0 2px no-repeat;
            transition: background-size .25s ease;
        }

        .link-underline:hover {
            background-size: 100% 2px;
        }

        .shine::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(120deg, transparent 30%, rgba(255, 255, 255, .25) 40%, transparent 60%);
            transform: translateX(-100%);
            transition: transform .6s ease;
            pointer-events: none;
        }

        .shine:hover::after {
            transform: translateX(100%);
        }
    </style>
</head>

<body class="antialiased bg-gray-50 text-gray-800">
    <div class="relative min-h-screen flex flex-col">

        <div class="pointer-events-none absolute inset-0 -z-10 overflow-hidden">
            <div
                class="absolute -top-40 left-1/2 w-[46rem] aspect-[1/1] -translate-x-1/2 rounded-full bg-gradient-to-tr from-[#80ffc5]/30 to-[#7c3aed]/30 blur-3xl">
            </div>
            <div
                class="absolute -bottom-48 -right-10 w-[36rem] aspect-[1/1] rounded-full bg-gradient-to-tr from-[#7c3aed]/20 to-[#80ffc5]/20 blur-3xl">
            </div>
        </div>

        <header class="bg-white/70 backdrop-blur-md shadow-sm ring-1 ring-black/5 sticky top-0 z-50">
            <nav class="flex items-center justify-between p-5 lg:px-8 max-w-7xl mx-auto" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="/" class="-m-1.5 p-1.5 inline-flex items-center gap-2">
                        <span class="text-xl font-bold text-indigo-600">Sistem Pakar</span>
                    </a>
                </div>
                <div class="flex lg:flex-1 justify-end items-center gap-x-6">
                    <a href="{{ route('kontak') }}"
                        class="text-sm font-semibold leading-6 text-indigo-600 link-underline">Kontak</a>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="text-sm font-semibold leading-6 text-gray-900 hover:text-indigo-600 transition-colors">
                                Dashboard <span aria-hidden="true">→</span>
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="text-sm font-semibold leading-6 text-gray-900 hover:text-indigo-600 transition-colors">
                                Log in <span aria-hidden="true">→</span>
                            </a>
                        @endauth
                    @endif
                </div>
            </nav>
        </header>

        <main class="flex-grow">
            <section class="bg-white">
                <div class="relative isolate px-6 pt-16 lg:px-8">
                    <div class="mx-auto max-w-2xl py-20 sm:py-28">
                        <div class="text-center">
                            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl" data-reveal>
                                Lokasi Praktek Dokter
                            </h1>
                            <p class="mt-6 text-lg leading-8 text-gray-600" data-reveal data-reveal-delay="100">
                                Temukan dokter spesialis tulang terbaik kami di lokasi-lokasi berikut. Kami siap
                                memberikan pelayanan kesehatan tulang yang komprehensif untuk Anda.
                            </p>
                            <div class="mt-8 flex items-center justify-center gap-3 text-xs text-gray-500" data-reveal
                                data-reveal-delay="180">
                                <span
                                    class="inline-flex items-center gap-2 rounded-full bg-gray-50 px-3 py-1 ring-1 ring-gray-200">
                                    <span class="size-1.5 rounded-full bg-indigo-600"></span> Terverifikasi
                                </span>
                                <span
                                    class="inline-flex items-center gap-2 rounded-full bg-gray-50 px-3 py-1 ring-1 ring-gray-200">
                                    <span class="size-1.5 rounded-full bg-gray-800"></span> Jadwal Fleksibel
                                </span>
                                <span
                                    class="inline-flex items-center gap-2 rounded-full bg-gray-50 px-3 py-1 ring-1 ring-gray-200">
                                    <span class="size-1.5 rounded-full bg-gray-400"></span> Konsultasi Nyaman
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 py-20 sm:py-24">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="mx-auto max-w-2xl lg:mx-0">
                            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl" data-reveal>Tim
                                Dokter Spesialis Kami</h2>
                        </div>

                        <ul role="list"
                            class="mx-auto mt-14 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-12 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                            @foreach ($kontakDokter as $kontak)
                                <li class="group relative" data-reveal>
                                    <div
                                        class="shine relative overflow-hidden rounded-2xl bg-white/70 backdrop-blur-sm shadow-sm ring-1 ring-gray-200 transition-all duration-300 hover:-translate-y-0.5 hover:shadow-xl">
                                        <div class="relative">
                                            <img class="aspect-[3/2] w-full object-contain bg-gray-100 transition-transform duration-500 group-hover:scale-[1.03]"
                                                src="{{ $kontak['foto'] }}"
                                                alt="Foto dokter {{ $kontak['nama_dokter'] }}">
                                            <div
                                                class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/50 via-black/10 to-transparent opacity-70">
                                            </div>
                                            <div
                                                class="absolute left-4 top-4 inline-flex items-center gap-2 rounded-full bg-white/90 px-3 py-1 text-xs font-medium text-gray-700 ring-1 ring-gray-200">
                                                <svg viewBox="0 0 20 20" class="size-4" fill="currentColor"
                                                    aria-hidden="true">
                                                    <path
                                                        d="M3 9a7 7 0 1 0 14 0A7 7 0 0 0 3 9Zm7-4a1 1 0 0 1 1 1v2h2a1 1 0 1 1 0 2h-2v2a1 1 0 1 1-2 0v-2H7a1 1 0 1 1 0-2h2V6a1 1 0 0 1 1-1Z" />
                                                </svg>
                                                Sistem Pakar
                                            </div>
                                        </div>

                                        <div class="p-6">
                                            <h3 class="font-semibold leading-8 tracking-tight text-gray-900 text-lg">
                                                {{ $kontak['nama_dokter'] }}
                                            </h3>
                                            <div class="mt-1 flex items-start gap-2 text-sm text-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" class="size-5 opacity-70">
                                                    <path fill-rule="evenodd"
                                                        d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 0 0 .281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 1 0 3 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 0 0 2.274 1.765 11.842 11.842 0 0 0 .979.57c.01.006.014.009.018.008l.006.003Z"
                                                        clip-rule="evenodd" />
                                                    <path d="M10 11.25a2.25 2.25 0 1 0 0-4.5 2.25 2.25 0 0 0 0 4.5Z" />
                                                </svg>
                                                <span>{{ $kontak['tempat_praktek'] }}</span>
                                            </div>

                                            <a href="{{ $kontak['map_url'] }}" target="_blank"
                                                class="mt-5 inline-flex items-center gap-x-2 rounded-xl bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition">
                                                Lihat di Peta
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="size-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 6.75V15m0 0v2.25m0-2.25h3.75m-3.75 0H5.25m11.25 0v2.25m0-2.25h-3.75m3.75 0h.375c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5c0-.621.504-1.125 1.125-1.125h.375m-8.25 0v2.25m0-2.25h-3.75m3.75 0h.375a1.125 1.125 0 0 1 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5c0-.621.504-1.125 1.125-1.125h.375M3 19.5h18" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </section>
        </main>

        <footer class="bg-gray-900 text-white">
            <div class="mx-auto max-w-7xl px-6 py-12">
                <p class="text-center text-xs leading-5 text-gray-400">© {{ date('Y') }} Sistem Pakar. All rights
                    reserved.</p>
            </div>
        </footer>
    </div>

    <script>
        (function() {
            const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            const els = document.querySelectorAll('[data-reveal]');
            els.forEach((el) => {
                el.style.opacity = 0;
                el.style.transform = 'translateY(16px)';
                el.style.transition = 'opacity .5s ease, transform .5s ease';
                const d = parseInt(el.getAttribute('data-reveal-delay') || '0', 10);
                el.style.transitionDelay = (d / 1000) + 's';
            });
            if (reduced) {
                els.forEach(el => {
                    el.style.opacity = 1;
                    el.style.transform = 'none';
                });
                return;
            }
            const io = new IntersectionObserver((entries) => {
                entries.forEach(e => {
                    if (e.isIntersecting) {
                        e.target.style.opacity = 1;
                        e.target.style.transform = 'none';
                        io.unobserve(e.target);
                    }
                })
            }, {
                threshold: .12
            });
            els.forEach(el => io.observe(el));
        })();
    </script>
</body>

</html>
