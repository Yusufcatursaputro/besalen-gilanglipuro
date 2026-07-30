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
                <!-- Gallery Item -->
                <div class="group relative aspect-square overflow-hidden rounded-xl bg-stone-200">
                    <img src="https://images.unsplash.com/photo-1590483838421-a4773c683ee3?auto=format&fit=crop&q=80" alt="Bara Api" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <span class="text-white font-medium tracking-wide">Bara Api</span>
                    </div>
                </div>
                <div class="group relative aspect-square overflow-hidden rounded-xl bg-stone-200">
                    <img src="https://images.unsplash.com/photo-1590021319028-2d7c5a08502e?auto=format&fit=crop&q=80" alt="Tempa Besi" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <span class="text-white font-medium tracking-wide">Tempa Besi</span>
                    </div>
                </div>
                <div class="group relative aspect-square overflow-hidden rounded-xl bg-stone-200">
                    <img src="https://images.unsplash.com/photo-1509937586828-56cb2f20c451?auto=format&fit=crop&q=80" alt="Detail Ukiran" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <span class="text-white font-medium tracking-wide">Detail Pamor</span>
                    </div>
                </div>
                <div class="group relative aspect-square overflow-hidden rounded-xl bg-stone-200">
                    <img src="https://images.unsplash.com/photo-1522869502446-f6d8924b6f12?auto=format&fit=crop&q=80" alt="Sepuh" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <span class="text-white font-medium tracking-wide">Proses Sepuh</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kategori: Hasil Keris -->
        <div>
            <h2 class="text-2xl font-serif font-bold text-slate-800 mb-8 border-l-4 border-amber-500 pl-4">Hasil Keris (Tosan Aji)</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <!-- Gallery Item -->
                <div class="group relative aspect-[3/4] overflow-hidden rounded-xl bg-stone-200">
                    <img src="https://images.unsplash.com/photo-1579737153673-9a3d6a6a0ec5?auto=format&fit=crop&q=80" alt="Keris Lurus" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center flex-col p-4 text-center">
                        <span class="text-amber-400 text-sm font-bold uppercase tracking-wider mb-1">Dhapur Lurus</span>
                        <span class="text-white font-serif text-lg">Keris Brojol</span>
                    </div>
                </div>
                <div class="group relative aspect-[3/4] overflow-hidden rounded-xl bg-stone-200">
                    <img src="https://images.unsplash.com/photo-1599839619722-39751411ea63?auto=format&fit=crop&q=80" alt="Keris Luk 3" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center flex-col p-4 text-center">
                        <span class="text-amber-400 text-sm font-bold uppercase tracking-wider mb-1">Dhapur Luk 3</span>
                        <span class="text-white font-serif text-lg">Keris Jangkung</span>
                    </div>
                </div>
                <div class="group relative aspect-[3/4] overflow-hidden rounded-xl bg-stone-200">
                    <img src="https://images.unsplash.com/photo-1621530962381-12501a35dc90?auto=format&fit=crop&q=80" alt="Keris Luk 11" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center flex-col p-4 text-center">
                        <span class="text-amber-400 text-sm font-bold uppercase tracking-wider mb-1">Dhapur Luk 11</span>
                        <span class="text-white font-serif text-lg">Keris Sabuk Inten</span>
                    </div>
                </div>
                <div class="group relative aspect-[3/4] overflow-hidden rounded-xl bg-stone-200">
                    <img src="https://images.unsplash.com/photo-1583344604505-1a80d75a8980?auto=format&fit=crop&q=80" alt="Tombak" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center flex-col p-4 text-center">
                        <span class="text-amber-400 text-sm font-bold uppercase tracking-wider mb-1">Tosan Aji</span>
                        <span class="text-white font-serif text-lg">Tombak Pusaka</span>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
@endsection
