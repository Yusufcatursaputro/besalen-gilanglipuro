@extends('components.public-layout')

@section('title', 'Galeri')

@section('content')
<!-- Header Banner -->
<div class="bg-stone-900 py-16 relative overflow-hidden">
    <div class="absolute inset-0 opacity-20 bg-[url('https://images.unsplash.com/photo-1542385151-efd9000785a0?auto=format&fit=crop&q=80')] bg-cover bg-center"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative text-center">
        <h1 class="text-4xl md:text-5xl font-serif font-bold text-white mb-4">Galeri Mahakarya</h1>
        <p class="text-amber-400 font-medium tracking-wide">Rekam Jejak Karya dan Proses Tempa</p>
    </div>
</div>

<section class="py-20 bg-[#fdfbf7]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Kategori: Proses Pembuatan -->
        <div class="mb-16">
            <h2 class="text-2xl font-serif font-bold text-slate-800 mb-8 border-l-4 border-amber-500 pl-4">Proses Pembuatan</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @forelse($galleries['proses'] ?? [] as $item)
                <!-- Gallery Item -->
                <div class="group relative aspect-square overflow-hidden rounded-xl bg-stone-200 shadow">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center p-4 text-center">
                        <span class="text-white font-medium tracking-wide">{{ $item->title }}</span>
                    </div>
                </div>
                @empty
                <div class="col-span-2 md:col-span-4 py-8 text-center text-gray-500 bg-white rounded-xl border border-gray-100">
                    <p>Belum ada foto untuk kategori Proses Pembuatan.</p>
                </div>
                @endforelse
            </div>
        </div>

        <!-- Kategori: Hasil Keris -->
        <div>
            <h2 class="text-2xl font-serif font-bold text-slate-800 mb-8 border-l-4 border-amber-500 pl-4">Hasil Keris (Tosan Aji)</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @forelse($galleries['hasil'] ?? [] as $item)
                <!-- Gallery Item -->
                <div class="group relative aspect-[3/4] overflow-hidden rounded-xl bg-stone-200 shadow">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center flex-col p-4 text-center">
                        <span class="text-white font-serif text-lg">{{ $item->title }}</span>
                    </div>
                </div>
                @empty
                <div class="col-span-2 md:col-span-4 py-8 text-center text-gray-500 bg-white rounded-xl border border-gray-100">
                    <p>Belum ada foto untuk kategori Hasil Keris.</p>
                </div>
                @endforelse
            </div>
        </div>

        <!-- Kategori: Kegiatan -->
        <div class="mt-16">
            <h2 class="text-2xl font-serif font-bold text-slate-800 mb-8 border-l-4 border-amber-500 pl-4">Kegiatan Besalen</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @forelse($galleries['kegiatan'] ?? [] as $item)
                <!-- Gallery Item -->
                <div class="group relative aspect-[4/3] overflow-hidden rounded-xl bg-stone-200 shadow">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center flex-col p-4 text-center">
                        <span class="text-white font-medium tracking-wide">{{ $item->title }}</span>
                    </div>
                </div>
                @empty
                <div class="col-span-2 md:col-span-4 py-8 text-center text-gray-500 bg-white rounded-xl border border-gray-100">
                    <p>Belum ada foto untuk kategori Kegiatan Besalen.</p>
                </div>
                @endforelse
            </div>
        </div>
        
    </div>
</section>
@endsection
