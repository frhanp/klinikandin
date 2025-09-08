<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Edit Penyakit') }}</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @php $rolePrefix = Auth::user()->role; @endphp
                    <form action="{{ route($rolePrefix . '.penyakit.update', $penyakit) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="kode_penyakit" class="block font-medium text-sm text-gray-700">Kode Penyakit</label>
                            <input type="text" name="kode_penyakit" id="kode_penyakit" class="block mt-1 w-full rounded-md shadow-sm border-gray-300" value="{{ old('kode_penyakit', $penyakit->kode_penyakit) }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="nama_penyakit" class="block font-medium text-sm text-gray-700">Nama Penyakit</label>
                            <input type="text" name="nama_penyakit" id="nama_penyakit" class="block mt-1 w-full rounded-md shadow-sm border-gray-300" value="{{ old('nama_penyakit', $penyakit->nama_penyakit) }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="deskripsi" class="block font-medium text-sm text-gray-700">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" rows="4" class="block mt-1 w-full rounded-md shadow-sm border-gray-300">{{ old('deskripsi', $penyakit->deskripsi) }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="pencegahan" class="block font-medium text-sm text-gray-700">Saran Pencegahan</label>
                            <textarea name="pencegahan" id="pencegahan" rows="4" class="block mt-1 w-full rounded-md shadow-sm border-gray-300">{{ old('pencegahan', $penyakit->pencegahan) }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="pengobatan" class="block font-medium text-sm text-gray-700">Saran Pengobatan</label>
                            <textarea name="pengobatan" id="pengobatan" rows="4" class="block mt-1 w-full rounded-md shadow-sm border-gray-300">{{ old('pengobatan', $penyakit->pengobatan) }}</textarea>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route($rolePrefix . '.penyakit.index') }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">Batal</a>
                            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>