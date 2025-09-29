<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Mulai Diagnosa (Langkah 2 dari 2)') }}</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-900">
                    <h3 class="text-2xl font-bold text-gray-800">Pertanyaan Pendalaman</h3>
                    <p class="mt-2 text-gray-600">Berdasarkan keluhan Anda, jawab pertanyaan berikut. Pilih semua yang sesuai.</p>
                    
                    <form action="{{ route('diagnosa.process') }}" method="POST" class="mt-6">
                        @csrf
                        <div class="space-y-4">
                            @forelse($gejalaPendalaman as $gejala)
                                <label class="flex items-center p-4 border rounded-lg has-[:checked]:bg-indigo-50 has-[:checked]:border-indigo-400 cursor-pointer">
                                    <input type="checkbox" name="gejala_ids[]" value="{{ $gejala->id }}" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500 rounded">
                                    <span class="ml-3 font-medium">{{ $gejala->pertanyaan }}</span>
                                </label>
                            @empty
                                <p class="text-center text-gray-500">Tidak ada pertanyaan pendalaman untuk keluhan yang Anda pilih.</p>
                            @endforelse
                        </div>
                        <div class="flex items-center justify-end mt-6">
                            <x-primary-button>{{ __('Lihat Hasil Diagnosa') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>