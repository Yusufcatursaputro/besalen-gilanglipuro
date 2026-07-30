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
        <div x-data="{ open:false, image:'', title:'' }">
            <h2 class="text-2xl font-serif font-bold text-slate-800 mb-8 border-l-4 border-amber-500 pl-4"> Hasil Keris (Tosan Aji)
        </h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

            <!-- Keris 1 -->
            <div
                @click="
                    open=true;
                    image='{{ asset('images/Keris 1-detail.jpeg') }}';
                    title='Keris 1';
                "
                class="group relative aspect-[3/4] overflow-hidden rounded-xl bg-stone-200 cursor-pointer">

                <img
                    src="{{ asset('images/Keris 1.jpeg') }}"
                    alt="Keris 1"
                    class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center flex-col p-4 text-center">

                    <span class="text-amber-400 text-sm font-bold uppercase tracking-wider mb-1"> Dhapur Lurus
                    </span>

                    <span class="text-white font-serif text-lg"> Keris 1
                    </span>
                </div>
            </div>
            
            <!-- Keris 2 -->
            <div
                @click="
                    open=true;
                    image='{{ asset('images/Keris 2-detail.jpeg') }}';
                    title='Keris Jangkung';
                "
                class="group relative aspect-[3/4] overflow-hidden rounded-xl bg-stone-200 cursor-pointer">

                <img
                    src="{{ asset('images/keris 2.jpeg') }}"
                    alt="Keris Jangkung"
                    class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center flex-col p-4 text-center">

                    <span class="text-amber-400 text-sm font-bold uppercase tracking-wider mb-1"> Dhapur Luk 3
                    </span>

                    <span class="text-white font-serif text-lg"> Keris 2
                    </span>
                </div>
            </div>

            <!-- Keris Sabuk Inten -->
            <div
                @click="
                    open=true;
                    image='{{ asset('images/Keris 3-detail.jpeg') }}';
                    title='Keris Sabuk Inten';
                "
                class="group relative aspect-[3/4] overflow-hidden rounded-xl bg-stone-200 cursor-pointer">

                <img
                    src="{{ asset('images/Keris 3.jpeg') }}"
                    alt="Keris Sabuk Inten"
                    class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center flex-col p-4 text-center">

                    <span class="text-amber-400 text-sm font-bold uppercase tracking-wider mb-1"> Dhapur Luk 11
                    </span>

                    <span class="text-white font-serif text-lg"> Keris 3
                    </span>
                </div>
            </div>
                
            <!-- Tombak -->
            <div
                @click="
                    open=true;
                    image='{{ asset('images/Keris 4-detail.jpeg') }}';
                    title='Tombak Pusaka';
                "
                class="group relative aspect-[3/4] overflow-hidden rounded-xl bg-stone-200 cursor-pointer">

                <img
                    src="{{ asset('images/Keris 4.jpeg') }}"
                    alt="Tombak"
                    class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center flex-col p-4 text-center">

                    <span class="text-amber-400 text-sm font-bold uppercase tracking-wider mb-1"> Tosan Aji
                    </span>

                    <span class="text-white font-serif text-lg"> Keris 4
                    </span>
                </div>
            </div>
        </div>

            <!-- Modal -->
            <div
                x-show="open"
                x-transition
                class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 p-6"
                @click.self="open = false"
>
                <div class="relative">
                    <button
                        @click="open = false"
                        class="absolute -top-3 -right-3 w-10 h-10 rounded-full bg-white text-black text-xl hover:bg-gray-200">
                        ✕
                    </button>

                <img
                    :src="image"
                    :alt="title"
                    class="max-w-[90vw] max-h-[85vh] object-contain rounded-xl shadow-2xl">
            </div>
        </div>

        <!-- Kategori: Kegiatan -->
        <div class="mt-16">
            <h2 class="text-2xl font-serif font-bold text-slate-800 mb-8 border-l-4 border-amber-500 pl-4">Kegiatan Besalen</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <!-- Gallery Item -->
                <div class="group relative aspect-[4/3] overflow-hidden rounded-xl bg-stone-200">
                    <img src="https://images.unsplash.com/photo-1544256718-3bcf237f3974?auto=format&fit=crop&q=80" alt="Pelatihan Pande Besi" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center flex-col p-4 text-center">
                        <span class="text-white font-medium tracking-wide">Pelatihan Pande Besi</span>
                    </div>
                </div>
                <div class="group relative aspect-[4/3] overflow-hidden rounded-xl bg-stone-200">
                    <img src="https://images.unsplash.com/photo-1574621100236-d26b7ee11a54?auto=format&fit=crop&q=80" alt="Edukasi Budaya" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center flex-col p-4 text-center">
                        <span class="text-white font-medium tracking-wide">Kunjungan Edukasi Budaya</span>
                    </div>
                </div>
                <div class="group relative aspect-[4/3] overflow-hidden rounded-xl bg-stone-200">
                    <img src="https://images.unsplash.com/photo-1533038590840-1cde6e668a91?auto=format&fit=crop&q=80" alt="Pameran Tosan Aji" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center flex-col p-4 text-center">
                        <span class="text-white font-medium tracking-wide">Pameran Tosan Aji</span>
                    </div>
                </div>
                <div class="group relative aspect-[4/3] overflow-hidden rounded-xl bg-stone-200">
                    <img src="https://images.unsplash.com/photo-1603574670812-d245908f5117?auto=format&fit=crop&q=80" alt="Ritual Adat" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center flex-col p-4 text-center">
                        <span class="text-white font-medium tracking-wide">Ritual Tempa Tradisional</span>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
@endsection
