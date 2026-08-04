@extends('components.public-layout')

@section('title', 'Beranda')

@section('content')
<!-- Hero Section -->
<section class="relative bg-amber-950 overflow-hidden">
    <!-- Background Pattern/Image Overlay -->
    <div class="absolute inset-0 bg-gradient-to-t from-amber-950 via-amber-900/60 to-transparent"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-40 flex flex-col items-center text-center">
        <span class="text-amber-500 font-semibold tracking-widest uppercase text-sm mb-4">Warisan Luhur Nusantara</span>
        <h1 class="text-5xl md:text-7xl font-bold text-white font-serif leading-tight mb-6 drop-shadow-lg">
            Nyala Perapian <br><span class="text-amber-400 italic">Empu Sejati</span>
        </h1>
        <p class="mt-4 max-w-2xl text-xl text-amber-50 font-light mb-10 leading-relaxed shadow-sm">
            Mengenal lebih dekat mahakarya seni tempa keris tradisional di Besalen GilangLipuro, merawat jejak sejarah dari generasi ke generasi.
        </p>
        <div class="flex gap-4">
            <a href="{{ route('tentang') }}" class="px-8 py-3 bg-amber-600 hover:bg-amber-500 text-white rounded-full font-medium transition shadow-lg hover:shadow-amber-500/25">
                Kenali Sejarah Kami
            </a>
            <a href="{{ route('galeri') }}" class="px-8 py-3 bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/20 text-white rounded-full font-medium transition">
                Lihat Mahakarya
            </a>
        </div>
    </div>
</section>

<!-- Berita Singkat / Latest Updates -->
<section class="py-24 bg-[#fdfbf7]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm text-amber-600 font-bold tracking-widest uppercase mb-2">Kabar Terkini</h2>
            <h3 class="text-4xl font-serif text-slate-800 font-bold">Jejak Langkah Besalen</h3>
            <div class="w-24 h-1 bg-amber-500 mx-auto mt-6 rounded-full"></div>
        </div>

        @if($latestPosts->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($latestPosts as $post)
                    <article class="bg-white rounded-2xl shadow-sm border border-stone-100 overflow-hidden hover:shadow-xl transition-all duration-300 group flex flex-col">
                        <a href="{{ route('berita.show', $post) }}" class="block relative aspect-[4/3] overflow-hidden">
                            @if($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            @else
                                <div class="w-full h-full bg-stone-200 flex items-center justify-center text-stone-400">
                                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                </div>
                            @endif
                            <div class="absolute top-4 left-4 bg-amber-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-sm">
                                {{ $post->created_at->format('d M Y') }}
                            </div>
                        </a>
                        <div class="p-6 flex-grow flex flex-col">
                            <h4 class="text-xl font-bold font-serif text-slate-800 mb-3 group-hover:text-amber-600 transition line-clamp-2">
                                <a href="{{ route('berita.show', $post) }}">{{ $post->title }}</a>
                            </h4>
                            <p class="text-stone-500 text-sm mb-6 line-clamp-3">
                                {{ Str::limit(strip_tags($post->content), 120) }}
                            </p>
                            <div class="mt-auto">
                                <a href="{{ route('berita.show', $post) }}" class="inline-flex items-center text-amber-600 font-semibold text-sm hover:text-amber-700">
                                    Baca Selengkapnya
                                    <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
            <div class="mt-12 text-center">
                <a href="{{ route('berita.index') }}" class="inline-block px-6 py-3 border border-amber-600 text-amber-700 hover:bg-amber-50 rounded-full font-medium transition">
                    Lihat Semua Berita
                </a>
            </div>
        @else
            <div class="text-center text-stone-500 py-12">
                <p>Belum ada berita terbaru saat ini.</p>
            </div>
        @endif
    </div>
</section>
@endsection
