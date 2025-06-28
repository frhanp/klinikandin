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
                    <form action="{{ route('admin.gejala.store') }}" method="POST">
                        @csrf
                        <div class="space-y-6">
                            {{-- Kode Gejala --}}
                            <div>
                                <x-input-label for="kode_gejala" :value="__('Kode Gejala (Contoh: G01)')" />
                                <x-text-input id="kode_gejala" name="kode_gejala" type="text" class="mt-1 block w-full" :value="old('kode_gejala')" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('kode_gejala')" />
                            </div>

                            {{-- Nama Gejala --}}
                            <div>
                                <x-input-label for="nama_gejala" :value="__('Nama Gejala')" />
                                <x-text-input id="nama_gejala" name="nama_gejala" type="text" class="mt-1 block w-full" :value="old('nama_gejala')" required />
                                <x-input-error class="mt-2" :messages="$errors->get('nama_gejala')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Simpan') }}</x-primary-button>
                                <a href="{{ route('admin.gejala.index') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                                    {{ __('Batal') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>