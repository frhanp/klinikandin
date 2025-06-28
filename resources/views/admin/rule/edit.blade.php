<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Kelola Aturan untuk: <span class="text-indigo-600">{{ $penyakit->nama_penyakit }}</span>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('admin.rule.update', $penyakit) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-6">
                            <p class="text-gray-700">Pilih semua gejala yang sesuai untuk penyakit ini:</p>
                        </div>

                        {{-- Daftar Checkbox Gejala --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            @forelse ($gejalas as $gejala)
                                <label class="flex items-center space-x-3 p-3 border rounded-md hover:bg-gray-50">
                                    <input type="checkbox" name="gejala_ids[]" value="{{ $gejala->id }}"
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                        {{ in_array($gejala->id, $gejalaPenyakit) ? 'checked' : '' }}>
                                    <span>{{ $gejala->kode_gejala }} - {{ $gejala->nama_gejala }}</span>
                                </label>
                            @empty
                                <p class="text-gray-500 col-span-full">Data gejala belum tersedia. Silakan tambah data gejala terlebih dahulu.</p>
                            @endforelse
                        </div>

                        <div class="mt-8 flex items-center gap-4">
                            <x-primary-button>{{ __('Simpan Aturan') }}</x-primary-button>
                            <a href="{{ route('admin.rule.index') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50">
                                {{ __('Kembali') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>