@extends('components.public-layout')

@section('title', $post->title)

@section('content')
<section class="py-16 bg-[#fdfbf7]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumb -->
        <nav class="flex text-stone-500 text-sm mb-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('home') }}" class="inline-flex items-center hover:text-amber-600 transition">
                        Beranda
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-3 h-3 text-stone-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <a href="{{ route('berita.index') }}" class="ml-1 text-sm font-medium hover:text-amber-600 transition">Berita</a>
                    </div>
                </li>
            </ol>
        </nav>

        <article class="bg-white rounded-3xl shadow-sm border border-stone-100 overflow-hidden">
            @if($post->image)
                <div class="w-full aspect-video bg-stone-100 relative">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                </div>
            @endif

            <div class="p-8 md:p-12">
                <div class="flex items-center gap-4 text-sm text-stone-500 mb-6 font-medium">
                    <div class="flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        {{ $post->created_at->translatedFormat('d F Y') }}
                    </div>
                    <div class="w-1 h-1 rounded-full bg-stone-300"></div>
                    <div class="flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        Admin
                    </div>
                </div>

                <h1 class="text-3xl md:text-5xl font-serif font-bold text-slate-800 leading-tight mb-8">
                    {{ $post->title }}
                </h1>

                <div class="prose prose-stone prose-lg max-w-none prose-headings:font-serif prose-a:text-amber-600 hover:prose-a:text-amber-500">
                    {!! nl2br(e($post->content)) !!}
                </div>
                
                <!-- Share (dummy) -->
                <div class="mt-12 pt-8 border-t border-stone-100 flex items-center justify-between">
                    <span class="text-stone-500 font-medium">Bagikan Artikel Ini:</span>
                    <div class="flex gap-2">
                        <button class="w-10 h-10 rounded-full bg-stone-100 hover:bg-amber-100 text-stone-600 hover:text-amber-600 flex items-center justify-center transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </button>
                        <button class="w-10 h-10 rounded-full bg-stone-100 hover:bg-amber-100 text-stone-600 hover:text-amber-600 flex items-center justify-center transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                        </button>
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>
@endsection
