<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Foto Galeri') }}
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

                    <form action="{{ route('dashboard.galeri.update', $galeri) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')
                        
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">Judul Foto</label>
                            <input type="text" name="title" id="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500" value="{{ old('title', $galeri->title) }}" required>
                        </div>

                        <div>
                            <label for="category" class="block text-sm font-medium text-gray-700">Kategori</label>
                            <select name="category" id="category" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-amber-500 focus:ring-amber-500" required>
                                <option value="proses" {{ old('category', $galeri->category) == 'proses' ? 'selected' : '' }}>Proses Pembuatan</option>
                                <option value="hasil" {{ old('category', $galeri->category) == 'hasil' ? 'selected' : '' }}>Hasil Keris (Tosan Aji)</option>
                                <option value="kegiatan" {{ old('category', $galeri->category) == 'kegiatan' ? 'selected' : '' }}>Kegiatan Besalen</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Gambar Saat Ini</label>
                            <img src="{{ asset('storage/' . $galeri->image) }}" class="w-48 rounded mb-4 shadow">
                            
                            <label for="image" class="block text-sm font-medium text-gray-700">Ganti Gambar (Kosongkan jika tidak ingin mengganti)</label>
                            <input type="file" name="image" id="image" class="mt-1 block w-full" accept="image/*">
                        </div>

                        <div class="flex items-center gap-4">
                            <button type="submit" class="bg-amber-600 hover:bg-amber-700 text-white font-bold py-2 px-6 rounded shadow">
                                Perbarui Foto
                            </button>
                            <a href="{{ route('dashboard.galeri.index') }}" class="text-gray-600 hover:text-gray-900">Batal</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
