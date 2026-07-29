<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kelola Galeri') }}
            </h2>
            <a href="{{ route('dashboard.galeri.create') }}" class="bg-amber-600 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded shadow">
                + Tambah Foto
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-100 text-gray-700">
                                <th class="py-3 px-4 border-b">ID</th>
                                <th class="py-3 px-4 border-b">Gambar</th>
                                <th class="py-3 px-4 border-b">Judul</th>
                                <th class="py-3 px-4 border-b">Kategori</th>
                                <th class="py-3 px-4 border-b text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($galleries as $galeri)
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3 px-4 border-b">{{ $galeri->id }}</td>
                                    <td class="py-3 px-4 border-b">
                                        <img src="{{ asset('storage/' . $galeri->image) }}" alt="{{ $galeri->title }}" class="w-20 h-20 object-cover rounded">
                                    </td>
                                    <td class="py-3 px-4 border-b font-medium">{{ $galeri->title }}</td>
                                    <td class="py-3 px-4 border-b">
                                        <span class="px-2 py-1 bg-amber-100 text-amber-800 rounded-full text-xs font-semibold capitalize">
                                            {{ $galeri->category }}
                                        </span>
                                    </td>
                                    <td class="py-3 px-4 border-b text-center space-x-2">
                                        <a href="{{ route('dashboard.galeri.edit', $galeri) }}" class="text-blue-600 hover:text-blue-800 font-semibold">Edit</a>
                                        <form action="{{ route('dashboard.galeri.destroy', $galeri) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus foto ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-800 font-semibold">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="py-6 text-center text-gray-500">Belum ada foto di galeri.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    
                    <div class="mt-4">
                        {{ $galleries->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
