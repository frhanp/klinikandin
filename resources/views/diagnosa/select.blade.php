<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Mulai Diagnosa (Langkah 2 dari 2)') }}</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-900">
                    <h3 class="text-2xl font-bold text-gray-800">Pilih Gejala yang Anda Rasakan</h3>
                    <p class="mt-2 text-gray-600">Pilih satu atau lebih gejala yang paling sesuai dari kategori <strong>{{ $kategori }}</strong>.</p>
                    
                    @if(session('error'))
                        <div class="mt-4 p-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('diagnosa.process') }}" method="POST" class="mt-6">
                        @csrf
                        <div class="space-y-4">
                            @foreach ($gejalas as $gejala)
                                <label class="flex items-center p-4 border rounded-lg has-[:checked]:bg-indigo-50 has-[:checked]:border-indigo-400 cursor-pointer">
                                    <input type="checkbox" name="gejala_ids[]" value="{{ $gejala->id }}" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500 rounded">
                                    <span class="ml-3 font-medium">{{ $gejala->nama_gejala }}</span>
                                </label>
                            @endforeach
                        </div>

                        <div class="flex items-center justify-between mt-6">
                             <a href="{{ route('diagnosa.index') }}" class="text-sm font-semibold text-gray-600 hover:text-gray-900">← Kembali ke Kategori</a>
                            <x-primary-button>
                                {{ __('Lihat Hasil Diagnosa') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>