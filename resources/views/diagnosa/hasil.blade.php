<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hasil Diagnosa Anda') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-900 space-y-6">

                    {{-- Gejala yang Dipilih Pengguna --}}
                    <div>
                        <h3 class="text-lg font-medium text-gray-700">Berdasarkan gejala yang Anda pilih:</h3>
                        <ul class="mt-2 list-disc list-inside space-y-1 text-gray-600">
                            @foreach($gejalaTerpilih as $gejala)
                                <li>{{ $gejala->nama_gejala }}</li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- Hasil Diagnosa --}}
                    <div class="border-t pt-6">
                        <p class="text-lg font-medium text-gray-700">Diagnosa awal yang paling sesuai adalah:</p>
                        <h1 class="text-4xl font-bold text-indigo-600 mt-1">
                            {{ $diagnosaHistory->penyakit->nama_penyakit }}
                        </h1>
                    </div>

                    {{-- Deskripsi & Solusi --}}
                    <div>
                        <h4 class="text-xl font-semibold text-gray-800">Deskripsi Penyakit</h4>
                        <div class="mt-2 prose max-w-none prose-p:text-gray-600">
                            <p>{{ $diagnosaHistory->penyakit->deskripsi }}</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6 border-t pt-6">
                        <div>
                            <h4 class="text-xl font-semibold text-gray-800">Saran Pencegahan</h4>
                            <div class="mt-2 prose max-w-none prose-p:text-gray-600">
                                <p>{{ $diagnosaHistory->penyakit->pencegahan ?? 'Informasi belum tersedia.' }}</p>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-xl font-semibold text-gray-800">Saran Pengobatan</h4>
                            <div class="mt-2 prose max-w-none prose-p:text-gray-600">
                                <p>{{ $diagnosaHistory->penyakit->pengobatan ?? 'Informasi belum tersedia.' }}</p>
                            </div>
                        </div>
                    </div>

                    {{-- Disclaimer --}}
                    <div class="border-t pt-6 text-sm text-gray-500">
                        <p><strong>Penting:</strong> Hasil ini adalah diagnosa awal berdasarkan sistem pakar dan tidak menggantikan konsultasi medis profesional. Segera hubungi dokter untuk pemeriksaan lebih lanjut.</p>
                    </div>

                    {{-- Tombol Aksi --}}
                    <div class="flex justify-end gap-4">
                        <a href="{{ route('diagnosa.riwayat') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50">
                            Lihat Semua Riwayat
                        </a>
                        <a href="{{ route('diagnosa.index') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900">
                            Ulangi Diagnosa
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>