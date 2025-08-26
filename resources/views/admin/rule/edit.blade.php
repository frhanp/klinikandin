<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Kelola Basis Aturan') }}
                </h2>
                <p class="mt-1 text-sm text-gray-500">
                    Pilih gejala yang relevan untuk penyakit: <strong class="font-medium text-gray-900">{{ $penyakit->nama_penyakit }}</strong>
                </p>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @php
                // Tentukan route action form berdasarkan role
                $updateRoute = Auth::user()->role == 'admin' 
                    ? route('admin.rule.update', $penyakit->id) 
                    : route('dokter.rule.update', $penyakit->id);
                
                $backRoute = Auth::user()->role == 'admin' 
                    ? route('admin.rule.index') 
                    : route('dokter.rule.index');
            @endphp

            <form action="{{ $updateRoute }}" method="POST">
                @csrf
                @method('PUT')

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 md:p-8">
                        {{-- Layout Grid untuk Gejala --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                            @foreach ($gejalas as $gejala)
                                <div>
                                    {{-- Setiap gejala dibungkus dalam label yang berfungsi sebagai kartu --}}
                                    <label for="gejala-{{ $gejala->id }}" 
                                        class="has-[:checked]:bg-indigo-50 has-[:checked]:ring-indigo-400 has-[:checked]:text-indigo-900
                                               flex items-center p-4 rounded-lg ring-1 ring-gray-200 
                                               cursor-pointer transition-all duration-150 hover:bg-gray-50">
                                        
                                        <input type="checkbox" name="gejala_ids[]" value="{{ $gejala->id }}"
                                            id="gejala-{{ $gejala->id }}" class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                            {{ in_array($gejala->id, $penyakitGejalaIds) ? 'checked' : '' }}>
                                        
                                        <span class="ml-3 font-medium text-sm text-gray-700">
                                            {{ $gejala->nama_gejala }}
                                        </span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Footer Aksi (Simpan & Kembali) --}}
                    <div class="flex items-center justify-end gap-x-6 bg-gray-50 px-6 py-4 border-t border-gray-200">
                        <a href="{{ $backRoute }}" class="text-sm font-semibold leading-6 text-gray-900">Kembali</a>
                        <button type="submit" class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Simpan Aturan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>