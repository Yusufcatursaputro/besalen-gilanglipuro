@extends('components.public-layout')

@section('title', 'Galeri')

@section('content')
<!-- Header Banner -->
<div class="bg-amber-950 py-16 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-t from-amber-950 via-amber-900/60 to-transparent"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative text-center">
        <h1 class="text-4xl md:text-5xl font-serif font-bold text-white mb-4">Galeri Mahakarya</h1>
        <p class="text-amber-400 font-medium tracking-wide">Rekam Jejak Karya dan Proses Tempa</p>
    </div>
</div>

<section class="py-20 bg-[#fdfbf7]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Kategori: Proses Pembuatan -->
        <div class="mb-16">
            <h2 class="text-2xl font-serif font-bold text-slate-800 mb-8 border-l-4 border-amber-500 pl-4">
                Proses Pembuatan
            </h2>

            <div
                x-data="{ scroll:null }"
                x-init="scroll = $refs.slider"
                class="relative">

                <!-- Tombol Kiri -->
                <button
                    @click="scroll.scrollBy({ left:-320, behavior:'smooth' })"
                    class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-black/60 text-white w-10 h-10 rounded-full hover:bg-black/80">

                    &#10094;
                </button>

                <!-- Slider -->
                <div
                    x-ref="slider"
                    class="flex gap-4 overflow-x-hidden scroll-smooth">

                    <!-- Foto 1 -->
                    <div class="group relative min-w-[24%] aspect-square overflow-hidden rounded-xl bg-stone-200">
                        <img
                            src="{{ asset('images/Proses 1.jpeg') }}"
                            alt="Bara Api"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <span class="text-white font-medium">Tungku pembakaran</span>
                        </div>
                    </div>

                    <!-- Foto 2 -->
                    <div class="group relative min-w-[24%] aspect-square overflow-hidden rounded-xl bg-stone-200">
                        <img
                            src="{{ asset('images/Proses 2.jpeg') }}"
                            alt="Tempa Besi"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <span class="text-white font-medium">Penempaan & pembentukan bilah</span>
                        </div>
                    </div>

                    <!-- Foto 3 -->
                    <div class="group relative min-w-[24%] aspect-square overflow-hidden rounded-xl bg-stone-200">
                        <img
                            src="{{ asset('images/Proses 3.jpeg') }}"
                            alt="Detail Pamor"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                        <span class="text-white font-medium">Pengerjaan detail keris</span>
                    </div>
                </div>

                <!-- Foto 4 -->
                <div class="group relative min-w-[24%] aspect-square overflow-hidden rounded-xl bg-stone-200">
                    <img
                        src="{{ asset('images/Proses 5.jpeg') }}"
                        alt="Sepuh"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                        <span class="text-white font-medium">Penghalusan bilah</span>
                    </div>
                </div>

                <!-- Foto 5 -->
                <div class="group relative min-w-[24%] aspect-square overflow-hidden rounded-xl bg-stone-200">
                    <img
                        src="{{ asset('images/Proses 4.jpeg') }}"
                        alt="Penghalusan"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                        <span class="text-white font-medium">Finishing</span>
                    </div>
                </div>

                <!-- Foto 6 -->
                <div class="group relative min-w-[24%] aspect-square overflow-hidden rounded-xl bg-stone-200">
                    <img
                        src="{{ asset('images/Proses 6.jpeg') }}"
                        alt="Finishing"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                        <span class="text-white font-medium">Finishing</span>
                    </div>
                </div>

            </div>

            <!-- Tombol Kanan -->
            <button
                @click="scroll.scrollBy({ left:320, behavior:'smooth' })"
                class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-black/60 text-white w-10 h-10 rounded-full hover:bg-black/80">

                &#10095;
            </button>

        </div>
    </div>

        <!-- Kategori: Hasil Keris -->
        <div
        x-data="{
            open:false,
            mode:'image',

            image:'',
            title:'',

            slides:[],
            currentSlide:0
    }">
            <h2 class="text-2xl font-serif font-bold text-slate-800 mb-8 border-l-4 border-amber-500 pl-4"> Hasil Keris (Tosan Aji)
        </h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

            <!-- Keris 1 -->
            <div
                @click="
                    mode='image';
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

                    <span class="text-white font-serif text-lg"> Keris 1
                    </span>
                </div>
            </div>
            
            <!-- Keris 2 -->
            <div
                class="group relative aspect-[3/4] overflow-hidden rounded-xl bg-stone-200 cursor-pointer">

                <img
                    src="{{ asset('images/keris 2.jpeg') }}"
                    alt="Keris 2"
                    class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center flex-col p-4 text-center">

                    <span class="text-white font-serif text-lg"> Keris 2
                    </span>
                </div>
            </div>

            <!-- Keris 3 -->
            <div
                @click="
                    mode='image';
                    open=true;
                    image='{{ asset('images/Keris 3-detail.png') }}';
                    title='Keris 3';
                    "
                class="group relative aspect-[3/4] overflow-hidden rounded-xl bg-stone-200 cursor-pointer">

                <img
                    src="{{ asset('images/Keris 3.jpeg') }}"
                    alt="Keris 3"
                    class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center flex-col p-4 text-center">

                    <span class="text-white font-serif text-lg"> Keris 3
                    </span>
                </div>
            </div>
                
            <!-- Keris 4 -->
            <div
                @click="
                    mode='image';
                    open=true;
                    image='{{ asset('images/Keris 4-detail.png') }}';
                    title='Keris 4';
                    "
                class="group relative aspect-[3/4] overflow-hidden rounded-xl bg-stone-200 cursor-pointer">

                <img
                    src="{{ asset('images/Keris 4.jpeg') }}"
                    alt="Keris 4"
                    class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center flex-col p-4 text-center">

                    <span class="text-white font-serif text-lg"> Keris 4
                    </span>
                </div>
            </div>
        </div>

            <!-- Modal -->
            <div
                x-show="open"
                x-transition
                class="fixed inset-0 z-50 bg-black/80 flex items-center justify-center p-6"
                style="display:none"
                @click.self="open=false">

                <div class="relative max-w-5xl w-full">

                    <button
                        @click="open=false"
                        class="absolute -top-12 right-0 text-white text-4xl">

                        &times;

                    </button>

                    <h2
                        class="text-center text-white text-2xl font-bold mb-4"
                        x-text="title">
                    </h2>

                    <!-- MODE KERIS -->
                    <template x-if="mode=='image'">

                        <img
                            :src="image"
                            class="w-full max-h-[85vh] object-contain rounded-xl">

                    </template>

                    <!-- MODE SLIDER -->
                    <template x-if="mode=='slider'">

                        <div>

                            <template x-if="slides[currentSlide].type=='image'">

                                <img
                                    :src="slides[currentSlide].src"
                                    class="max-h-[80vh] mx-auto rounded-xl object-contain">

                            </template>

                            <template x-if="slides[currentSlide].type=='video'">

                                <video
                                    :key="slides[currentSlide].src"
                                    :src="slides[currentSlide].src"
                                    controls
                                    class="w-full max-h-[80vh] rounded-xl">

                                </video>

                            </template>

                            <!-- tombol kiri -->
                            <button
                                x-show="currentSlide>0"
                                @click="currentSlide--"
                                class="absolute left-0 top-1/2 -translate-y-1/2 bg-black/60 text-white w-12 h-12 rounded-full">

                                &#10094;

                            </button>

                            <!-- tombol kanan -->
                            <button
                                x-show="currentSlide<slides.length-1"
                                @click="currentSlide++"
                                class="absolute right-0 top-1/2 -translate-y-1/2 bg-black/60 text-white w-12 h-12 rounded-full">

                                &#10095;

                            </button>

                        </div>

                    </template>

                </div>

            </div>

        <!-- Kategori: Kegiatan -->
        <div class="mt-16">
            <h2 class="text-2xl font-serif font-bold text-slate-800 mb-8 border-l-4 border-amber-500 pl-4">Kegiatan Besalen</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <!-- Gallery Item -->
                <div
                    @click="
                        mode='slider';
                        open=true;
                        title='Pelatihan Pande Besi';
                        currentSlide=0;

                        slides=[
                            {type:'image', src:'{{ asset('images/Pelatihan 1.jpeg') }}'},
                            {type:'video', src:'{{ asset('images/Pelatihan 2.mp4') }}'},
                            {type:'video', src:'{{ asset('images/Pelatihan 3.mp4') }}'},
                        ];
                    "

                    class="group relative aspect-[4/3] overflow-hidden rounded-xl bg-stone-200 cursor-pointer">

                    <img
                        src="{{ asset('images/PelatihanPandeBesi.jpeg') }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">

                        <span class="text-white font-medium">
                            Pelatihan Pande Besi
                        </span>
                    </div>
                </div>

                <!-- Pameran Tosan Aji -->
                <div
                    @click="
                        mode='slider';
                        open=true;
                        title='Pameran Tosan Aji';
                        currentSlide=0;

                        slides=[
                            {type:'image', src:'{{ asset('images/Pameran 1.jpeg') }}'},
                            {type:'image', src:'{{ asset('images/Pameran 2.jpeg') }}'},
                            {type:'image', src:'{{ asset('images/Pameran 3.jpeg') }}'},
                        ];
                "

                class="group relative aspect-[4/3] overflow-hidden rounded-xl bg-stone-200 cursor-pointer">

                <img
                    src="{{ asset('images/PameranTosanAji.jpeg') }}"
                    class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">

                    <span class="text-white font-medium tracking-wide">
                        Pameran Tosan Aji
                    </span>
                </div>
            </div>
                <div class="group relative aspect-[4/3] overflow-hidden rounded-xl bg-stone-200">
                    <img src="https://images.unsplash.com/photo-1574621100236-d26b7ee11a54?auto=format&fit=crop&q=80" alt="Edukasi Budaya" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center flex-col p-4 text-center">
                        <span class="text-white font-medium tracking-wide">Kunjungan Edukasi Budaya</span>
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
