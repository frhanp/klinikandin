<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Diagnosa Mundur (Backward Chaining)') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-900">
                    <h3 class="text-2xl font-bold text-gray-800">Verifikasi Hipotesis Penyakit</h3>
                    <p class="mt-2 text-gray-600">Pilih penyakit yang Anda curigai (hipotesis), dan sistem akan menanyakan gejala-gejala yang relevan untuk memverifikasi dugaan Anda.</p>
                    
                    @if(session('error'))
                        <div class="mt-4 p-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('diagnosa-backward.start') }}" method="POST" class="mt-6">
                        @csrf
                        <div>
                            <x-input-label for="penyakit_id" :value="__('Pilih Penyakit yang Dicurigai')" />
                            <select name="penyakit_id" id="penyakit_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                                <option value="" disabled selected>-- Pilih salah satu --</option>
                                @foreach($penyakits as $penyakit)
                                    <option value="{{ $penyakit->id }}">{{ $penyakit->nama_penyakit }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('penyakit_id')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <x-primary-button>
                                {{ __('Mulai Verifikasi') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>