<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Gejala Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @php $rolePrefix = Auth::user()->role; @endphp
                    <form action="{{ route($rolePrefix . '.gejala.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="kode_gejala" class="block font-medium text-sm text-gray-700">Kode Gejala</label>
                            <input type="text" name="kode_gejala" id="kode_gejala" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('kode_gejala') }}" required>
                            @error('kode_gejala')
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="nama_gejala" class="block font-medium text-sm text-gray-700">Nama Gejala</label>
                            <input type="text" name="nama_gejala" id="nama_gejala" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('nama_gejala') }}" required>
                             @error('nama_gejala')
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="kategori" class="block font-medium text-sm text-gray-700">Kategori Gejala</label>
                            <input type="text" name="kategori" id="kategori" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 ..." value="{{ old('kategori') }}" required>
                            <p class="text-xs text-gray-500 mt-1">Contoh: Tulang Belakang, Sendi, Lutut, Gejala Umum.</p>
                            @error('kategori')
                                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route($rolePrefix . '.gejala.index') }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">Batal</a>
                            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>