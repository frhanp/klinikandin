<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="space-y-8">

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 md:p-8 text-gray-900 flex flex-col md:flex-row items-center justify-between gap-6">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800">Selamat Datang, {{ Auth::user()->name }}!</h3>
                            <p class="mt-2 text-gray-600">Siap untuk memeriksa kesehatan tulang Anda? Klik tombol di samping untuk memulai diagnosa berdasarkan gejala yang Anda rasakan.</p>
                        </div>
                        <a href="{{ route('diagnosa.start') }}" class="w-full md:w-auto flex-shrink-0 rounded-md bg-indigo-600 px-6 py-3 text-sm font-semibold text-white text-center shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition-all duration-150">
                            Mulai Diagnosa Baru
                        </a>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 md:p-8">
                        <div class="flex items-center justify-between">
                            <h3 class="text-xl font-bold text-gray-800">Riwayat Diagnosa Terakhir</h3>
                            <a href="{{ route('diagnosa.riwayat') }}" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">Lihat Semua &rarr;</a>
                        </div>
                        
                        <div class="mt-6 border-t border-gray-200">
                            @forelse ($riwayatTerakhir as $riwayat)
                                <div class="py-4 flex items-center justify-between border-b border-gray-100">
                                    <div>
                                        <p class="font-semibold text-gray-800">{{ $riwayat->penyakit->nama_penyakit }}</p>
                                        <p class="text-sm text-gray-500">{{ $riwayat->created_at->format('d F Y, H:i') }}</p>
                                    </div>
                                    <a href="{{ route('diagnosa.result', $riwayat->id) }}" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">
                                        Lihat Detail
                                    </a>
                                </div>
                            @empty
                                <div class="py-10 text-center">
                                    <p class="text-gray-500">Anda belum memiliki riwayat diagnosa.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>

                <div class="bg-indigo-50 border-l-4 border-indigo-400 p-6 rounded-lg">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-indigo-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-indigo-700">
                                Hasil diagnosa dari sistem ini adalah prediksi awal dan <strong class="font-semibold">tidak menggantikan konsultasi medis profesional</strong>. Untuk kepastian, silakan hubungi <a href="{{ route('kontak') }}" class="font-semibold underline">dokter atau klinik kami</a>.
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>