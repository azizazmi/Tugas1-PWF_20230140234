<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About Me') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900">
                <h3 class="text-lg font-bold mb-4">Biodata Mahasiswa</h3>
                <ul class="space-y-2">
                    <li><strong>Nama:</strong> Azizah Aurellia Azmi</li>
                    <li><strong>NIM:</strong> 20230140234</li>
                    <li><strong>Program Studi:</strong> S1 Teknologi Informasi</li>
                    <li><strong>Hobi:</strong> Tidur</li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>