<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Penyakit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('admin.penyakit.update', $penyakit) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="space-y-6">
                            <div>
                                <x-input-label for="kode_penyakit" :value="__('Kode Penyakit')" />
                                <x-text-input id="kode_penyakit" name="kode_penyakit" type="text" class="mt-1 block w-full" :value="old('kode_penyakit', $penyakit->kode_penyakit)" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('kode_penyakit')" />
                            </div>
                            <div>
                                <x-input-label for="nama_penyakit" :value="__('Nama Penyakit')" />
                                <x-text-input id="nama_penyakit" name="nama_penyakit" type="text" class="mt-1 block w-full" :value="old('nama_penyakit', $penyakit->nama_penyakit)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('nama_penyakit')" />
                            </div>
                            <div>
                                <x-input-label for="deskripsi" :value="__('Deskripsi Penyakit')" />
                                <textarea id="deskripsi" name="deskripsi" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" rows="4">{{ old('deskripsi', $penyakit->deskripsi) }}</textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('deskripsi')" />
                            </div>
                            <div>
                                <x-input-label for="solusi" :value="__('Solusi Penyakit')" />
                                <textarea id="solusi" name="solusi" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" rows="4">{{ old('solusi', $penyakit->solusi) }}</textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('solusi')" />
                            </div>
                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Update') }}</x-primary-button>
                                <a href="{{ route('admin.penyakit.index') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50">
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