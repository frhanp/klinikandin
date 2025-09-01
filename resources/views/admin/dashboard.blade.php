<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="space-y-8">

                <div>
                    <h3 class="text-base font-semibold leading-6 text-gray-900">Ringkasan Sistem</h3>
                    <dl class="mt-4 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-5">
                        <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
                            <dt class="truncate text-sm font-medium text-gray-500">Total Pengguna</dt>
                            <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ $stats['pengguna'] }}</dd>
                        </div>
                        <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
                            <dt class="truncate text-sm font-medium text-gray-500">Total Dokter</dt>
                            <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ $stats['dokter'] }}</dd>
                        </div>
                        <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
                            <dt class="truncate text-sm font-medium text-gray-500">Total Penyakit</dt>
                            <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ $stats['penyakit'] }}</dd>
                        </div>
                        <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
                            <dt class="truncate text-sm font-medium text-gray-500">Total Gejala</dt>
                            <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ $stats['gejala'] }}</dd>
                        </div>
                        <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
                            <dt class="truncate text-sm font-medium text-gray-500">Total Diagnosa</dt>
                            <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ $stats['total_diagnosa'] }}</dd>
                        </div>
                    </dl>
                </div>

                <div>
                    <h3 class="text-base font-semibold leading-6 text-gray-900">Akses Cepat</h3>
                    <div class="mt-4 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4"> 
                        <a href="{{ route('admin.gejala.index') }}" class="rounded-lg bg-indigo-600 px-4 py-5 text-white shadow hover:bg-indigo-700 transition">
                            <p class="font-semibold">Kelola Gejala</p>
                            <p class="text-sm text-indigo-100 mt-1">Tambah, edit, atau hapus data gejala.</p>
                        </a>
                        <a href="{{ route('admin.penyakit.index') }}" class="rounded-lg bg-indigo-600 px-4 py-5 text-white shadow hover:bg-indigo-700 transition">
                            <p class="font-semibold">Kelola Penyakit</p>
                            <p class="text-sm text-indigo-100 mt-1">Tambah, edit, atau hapus data penyakit.</p>
                        </a>
                        <a href="{{ route('admin.dokter.index') }}" class="rounded-lg bg-indigo-600 px-4 py-5 text-white shadow hover:bg-indigo-700 transition">
                            <p class="font-semibold">Kelola Dokter</p>
                            <p class="text-sm text-indigo-100 mt-1">Tambah, edit, atau hapus data dokter.</p>
                        </a>
                        {{-- <a href="{{ route('admin.rule.index') }}" class="rounded-lg bg-indigo-600 px-4 py-5 text-white shadow hover:bg-indigo-700 transition">
                            <p class="font-semibold">Kelola Aturan (Rule Base)</p>
                            <p class="text-sm text-indigo-100 mt-1">Hubungkan gejala dengan penyakit.</p>
                        </a> --}}
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 md:p-8">
                        <h3 class="text-xl font-bold text-gray-800">Aktivitas Diagnosa Terakhir</h3>
                        <div class="mt-6 flow-root">
                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                    <table class="min-w-full divide-y divide-gray-300">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Nama Pasien</th>
                                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Hasil Diagnosa</th>
                                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Waktu</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200">
                                            @forelse ($aktivitasTerakhir as $aktivitas)
                                                <tr>
                                                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">{{ $aktivitas->user->name }}</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $aktivitas->penyakit->nama_penyakit }}</td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $aktivitas->created_at->diffForHumans() }}</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="3" class="px-3 py-10 text-center text-sm text-gray-500">
                                                        Belum ada aktivitas diagnosa yang tercatat.
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>