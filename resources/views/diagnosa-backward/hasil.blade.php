<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hasil Verifikasi Diagnosa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-900 space-y-6">

                    {{-- JIKA HIPOTESIS TERBUKTI, TAMPILKAN HASIL LENGKAP --}}
                    @if($terbukti)
                        {{-- Gejala yang Dikonfirmasi Pengguna --}}
                        <div>
                            <h3 class="text-lg font-medium text-gray-700">Berdasarkan gejala yang Anda konfirmasi:</h3>
                            <ul class="mt-2 list-disc list-inside space-y-1 text-gray-600">
                                @forelse($gejalaTerpilih as $gejala)
                                    <li>{{ $gejala->nama_gejala }}</li>
                                @empty
                                    <li>- Tidak ada gejala yang dikonfirmasi -</li>
                                @endforelse
                            </ul>
                        </div>

                        {{-- Hasil Diagnosa --}}
                        <div class="border-t pt-6">
                            <p class="text-lg font-medium text-gray-700">Hasil verifikasi menunjukkan kemungkinan besar Anda menderita:</p>
                            <h1 class="text-4xl font-bold text-indigo-600 mt-1">
                                {{ $penyakit->nama_penyakit }}
                            </h1>
                        </div>

                        {{-- Deskripsi Penyakit --}}
                        <div>
                            <h4 class="text-xl font-semibold text-gray-800">Deskripsi Penyakit</h4>
                            <div class="mt-2 prose max-w-none prose-p:text-gray-600">
                                <p>{{ $penyakit->deskripsi }}</p>
                            </div>
                        </div>

                        {{-- Pencegahan dan Pengobatan --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6 border-t pt-6">
                            <div>
                                <h4 class="text-xl font-semibold text-gray-800">Saran Pencegahan</h4>
                                <div class="mt-2 prose max-w-none prose-p:text-gray-600">
                                    <p>{{ $penyakit->pencegahan ?? 'Informasi belum tersedia.' }}</p>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold text-gray-800">Saran Pengobatan</h4>
                                <div class="mt-2 prose max-w-none prose-p:text-gray-600">
                                    <p>{{ $penyakit->pengobatan ?? 'Informasi belum tersedia.' }}</p>
                                </div>
                            </div>
                        </div>

                    {{-- JIKA HIPOTESIS TIDAK TERBUKTI, TAMPILKAN PESAN SEDERHANA --}}
                    @else
                        <div class="text-center">
                            <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-red-100">
                                 <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                            </div>
                            <h3 class="mt-4 text-2xl font-bold text-gray-800">Hipotesis Tidak Terbukti</h3>
                            <p class="mt-2 text-gray-600">Berdasarkan jawaban Anda, kecil kemungkinan Anda menderita <strong>{{ $penyakit->nama_penyakit }}</strong>.</p>
                            <p class="mt-4 text-sm text-gray-500">Anda dapat mencoba memverifikasi penyakit lain atau menggunakan metode diagnosa (forward) untuk hasil yang lebih terbuka.</p>
                        </div>
                    @endif

                    {{-- Disclaimer & Tombol Aksi --}}
                    <div class="border-t pt-6 text-sm text-gray-500">
                        <p><strong>Penting:</strong> Hasil ini adalah diagnosa awal dan tidak menggantikan konsultasi medis profesional.</p>
                    </div>

                    <div class="flex justify-end gap-4">
                        <a href="{{ route('diagnosa-backward.index') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50">
                            Verifikasi Lagi
                        </a>
                        <a href="{{ route('dashboard') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900">
                            Kembali ke Dashboard
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>