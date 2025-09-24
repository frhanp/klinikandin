<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Proses Verifikasi Diagnosa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-900">

                    <p class="text-sm text-indigo-600 font-semibold">Hipotesis: {{ $penyakit->nama_penyakit }}</p>
                    <h3 class="mt-2 text-2xl font-bold text-gray-800">Apakah Anda mengalami gejala berikut?</h3>
                    
                    <div class="my-6 p-6 bg-indigo-50 rounded-lg text-center">
                        <p class="text-3xl font-medium text-indigo-900">{{ $gejala->nama_gejala }}</p>
                    </div>

                    <form action="{{ route('diagnosa-backward.answer') }}" method="POST">
                        @csrf
                        <div class="flex items-center justify-center gap-x-6">
                            <button type="submit" name="jawaban" value="tidak" class="rounded-md bg-white px-8 py-3 text-lg font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                Tidak
                            </button>
                            <button type="submit" name="jawaban" value="ya" class="rounded-md bg-indigo-600 px-8 py-3 text-lg font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Ya
                            </button>
                        </div>
                    </form>

                    <div class="mt-8">
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-indigo-600 h-2.5 rounded-full" style="width: {{ $progress }}%"></div>
                        </div>
                        <p class="text-sm text-center mt-2 text-gray-500">{{ $progress }}% Selesai</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>