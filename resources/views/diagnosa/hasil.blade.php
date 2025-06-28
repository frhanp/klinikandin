<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hasil Diagnosa Anda') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 space-y-6">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-800">
                            {{ $diagnosaHistory->penyakit->nama_penyakit }}
                        </h3>
                        <p class="text-lg font-medium text-indigo-600 mt-1">
                            Tingkat Kecocokan: {{ number_format($diagnosaHistory->hasil_skor * 100, 2) }}%
                        </p>
                    </div>

                    <div class="border-t pt-6">
                        <h4 class="text-lg font-semibold text-gray-700 mb-2">Deskripsi Penyakit</h4>
                        <p class="text-gray-600 text-justify">
                            {{ $diagnosaHistory->penyakit->deskripsi }}
                        </p>
                    </div>

                    <div class="border-t pt-6">
                        <h4 class="text-lg font-semibold text-gray-700 mb-2">Solusi dan Penanganan</h4>
                        <p class="text-gray-600 text-justify">
                           {{ $diagnosaHistory->penyakit->solusi }}
                        </p>
                    </div>
                    
                    <div class="border-t pt-6 text-sm text-gray-500">
                        <p><strong>Disclaimer:</strong> Hasil diagnosa ini adalah berdasarkan sistem pakar dan tidak menggantikan konsultasi medis profesional. Segera hubungi dokter untuk penanganan lebih lanjut.</p>
                    </div>

                    <div class="flex justify-center gap-4 mt-8">
                        <a href="{{ route('diagnosa.index') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700">
                            Diagnosa Ulang
                        </a>
                         <a href="{{ route('diagnosa.riwayat') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50">
                            Lihat Riwayat
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>