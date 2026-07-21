@extends('components.public-layout')

@section('title', 'Berita & Artikel')

@section('content')
<!-- Header Banner -->
<div class="bg-stone-900 py-16 relative overflow-hidden">
    <div class="absolute inset-0 opacity-20 bg-[url('https://images.unsplash.com/photo-1542385151-efd9000785a0?auto=format&fit=crop&q=80')] bg-cover bg-center"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative text-center">
        <h1 class="text-4xl md:text-5xl font-serif font-bold text-white mb-4">Berita & Artikel</h1>
        <p class="text-amber-400 font-medium tracking-wide">Kabar Terkini Seputar Kegiatan Besalen</p>
    </div>
</div>

<section class="py-20 bg-[#fdfbf7]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        @if($posts->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($posts as $post)
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

            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                {{ $posts->links() }}
            </div>
        @else
            <div class="text-center bg-white rounded-2xl shadow-sm border border-stone-100 p-12 max-w-2xl mx-auto">
                <svg class="w-16 h-16 text-stone-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-.586-1.414l-4.586-4.586A2 2 0 0015.414 3H15m-4 5h4"></path></svg>
                <h3 class="text-xl font-serif text-slate-800 font-bold mb-2">Belum Ada Berita</h3>
                <p class="text-stone-500">Saat ini belum ada artikel atau berita yang dipublikasikan.</p>
            </div>
        @endif
    </div>
</section>
@endsection
