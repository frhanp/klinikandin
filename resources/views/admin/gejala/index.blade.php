<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manajemen Gejala') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- ========================================================== --}}
                    {{-- ===== REVISI DIMULAI DI SINI ===== --}}
                    {{-- ========================================================== --}}
                    @php
                        // Menentukan prefix route ('admin' atau 'dokter') berdasarkan peran pengguna
                        $rolePrefix = Auth::user()->role;
                    @endphp

                    {{-- Tombol Tambah Gejala (Link sudah dinamis) --}}
                    <div class="mb-4">
                        <a href="{{ route($rolePrefix . '.gejala.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 active:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Tambah Gejala
                        </a>
                    </div>

                    {{-- Notifikasi Sukses --}}
                    @if (session('success'))
                        <div class="mb-4 p-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- Tabel Data Gejala --}}
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kode</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Gejala</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($gejalas as $index => $gejala)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $gejalas->firstItem() + $index }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $gejala->kode_gejala }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $gejala->nama_gejala }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            {{-- Link Edit & Form Hapus (sudah dinamis) --}}
                                            <a href="{{ route($rolePrefix . '.gejala.edit', $gejala) }}" class="text-indigo-600 hover:text-indigo-900 mr-4">Edit</a>
                                            <form action="{{ route($rolePrefix . '.gejala.destroy', $gejala) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                                            Data belum tersedia.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                     {{-- Pagination --}}
                    <div class="mt-4">
                        {{ $gejalas->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>