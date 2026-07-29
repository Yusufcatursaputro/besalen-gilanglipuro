<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Profil Empu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6">
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('dashboard.empu.update', $empu) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')
                        
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Nama Empu</label>
                            <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500" value="{{ old('name', $empu->name) }}" required>
                        </div>

                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">Gelar / Posisi (Opsional)</label>
                            <input type="text" name="title" id="title" placeholder="Contoh: Generasi ke-17 Empu Supo" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500" value="{{ old('title', $empu->title) }}">
                        </div>

                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi / Profil Singkat</label>
                            <textarea name="description" id="description" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500" required>{{ old('description', $empu->description) }}</textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Foto Saat Ini</label>
                            <img src="{{ asset('storage/' . $empu->image) }}" class="w-32 h-32 object-cover rounded-full mb-4 shadow">
                            
                            <label for="image" class="block text-sm font-medium text-gray-700">Ganti Foto (Kosongkan jika tidak ingin mengganti)</label>
                            <input type="file" name="image" id="image" class="mt-1 block w-full" accept="image/*">
                        </div>

                        <div class="flex items-center mt-4">
                            <input type="checkbox" name="is_certified" id="is_certified" class="rounded border-gray-300 text-amber-600 shadow-sm focus:border-amber-300 focus:ring focus:ring-amber-200 focus:ring-opacity-50" value="1" {{ old('is_certified', $empu->is_certified) ? 'checked' : '' }}>
                            <label for="is_certified" class="ml-2 block text-sm text-gray-900">
                                Beri lencana "Tersertifikasi Nasional"
                            </label>
                        </div>

                        <div class="flex items-center gap-4 pt-4 border-t border-gray-100">
                            <button type="submit" class="bg-amber-600 hover:bg-amber-700 text-white font-bold py-2 px-6 rounded shadow">
                                Perbarui Profil
                            </button>
                            <a href="{{ route('dashboard.empu.index') }}" class="text-gray-600 hover:text-gray-900">Batal</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
