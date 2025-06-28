<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mulai Diagnosa Penyakit Tulang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('diagnosa.process') }}" method="POST" class="p-6">
                    @csrf
                    <div class="mb-6 text-gray-700">
                        <p>Silakan pilih gejala-gejala yang Anda rasakan di bawah ini. Anda dapat memilih lebih dari satu gejala.</p>
                    </div>

                    @if (session('error'))
                        <div class="mb-4 p-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    
                    @error('gejala_ids')
                         <div class="mb-4 p-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
                            Anda harus memilih minimal satu gejala.
                        </div>
                    @enderror

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
                        @forelse ($gejalas as $gejala)
                            <label class="flex items-center space-x-3 p-3 border rounded-md hover:bg-gray-50 cursor-pointer">
                                <input type="checkbox" name="gejala_ids[]" value="{{ $gejala->id }}"
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                                <span>{{ $gejala->nama_gejala }}</span>
                            </label>
                        @empty
                             <p class="text-gray-500 col-span-full">Data gejala belum disiapkan oleh admin.</p>
                        @endforelse
                    </div>

                    <div class="flex items-center">
                        <x-primary-button type="submit">
                            {{ __('Lihat Hasil Diagnosa') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>