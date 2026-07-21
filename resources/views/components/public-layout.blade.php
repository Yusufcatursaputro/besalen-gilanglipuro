<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Besalen GilangLipuro') }} - @yield('title', 'Warisan Budaya Keris')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
    
    <style>
        body { font-family: 'Outfit', sans-serif; }
        h1, h2, h3, h4, h5, h6, .font-serif { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="font-sans antialiased bg-[#fdfbf7] text-slate-800 flex flex-col min-h-screen">
    
    <!-- Navbar -->
    <nav class="bg-amber-900/95 backdrop-blur-sm shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center gap-3">
                        {{-- Placeholder for logo --}}
                        <div class="w-10 h-10 bg-amber-500 rounded-full flex items-center justify-center text-white font-serif font-bold text-xl">B</div>
                        <span class="font-serif font-bold text-2xl text-amber-50 tracking-wide">Besalen<span class="text-amber-400">Gilang</span></span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden sm:flex sm:items-center sm:space-x-8">
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-amber-400 font-semibold' : 'text-amber-50 hover:text-amber-300' }} transition px-3 py-2 text-base">Beranda</a>
                    <a href="{{ route('tentang') }}" class="{{ request()->routeIs('tentang') ? 'text-amber-400 font-semibold' : 'text-amber-50 hover:text-amber-300' }} transition px-3 py-2 text-base">Tentang Kami</a>
                    <a href="{{ route('galeri') }}" class="{{ request()->routeIs('galeri') ? 'text-amber-400 font-semibold' : 'text-amber-50 hover:text-amber-300' }} transition px-3 py-2 text-base">Galeri</a>
                    <a href="{{ route('berita.index') }}" class="{{ request()->routeIs('berita.*') ? 'text-amber-400 font-semibold' : 'text-amber-50 hover:text-amber-300' }} transition px-3 py-2 text-base">Berita</a>
                    <a href="{{ route('kontak') }}" class="{{ request()->routeIs('kontak') ? 'text-amber-400 font-semibold' : 'text-amber-50 hover:text-amber-300' }} transition px-3 py-2 text-base">Kontak</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button type="button" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="inline-flex items-center justify-center p-2 rounded-md text-amber-100 hover:text-white hover:bg-amber-800 focus:outline-none focus:bg-amber-800 focus:text-white transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden sm:hidden bg-amber-950 pb-3 pt-2">
            <a href="{{ route('home') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('home') ? 'border-amber-400 text-amber-400 bg-amber-900/50' : 'border-transparent text-amber-100 hover:text-white hover:bg-amber-800' }} text-base font-medium transition">Beranda</a>
            <a href="{{ route('tentang') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('tentang') ? 'border-amber-400 text-amber-400 bg-amber-900/50' : 'border-transparent text-amber-100 hover:text-white hover:bg-amber-800' }} text-base font-medium transition">Tentang Kami</a>
            <a href="{{ route('galeri') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('galeri') ? 'border-amber-400 text-amber-400 bg-amber-900/50' : 'border-transparent text-amber-100 hover:text-white hover:bg-amber-800' }} text-base font-medium transition">Galeri</a>
            <a href="{{ route('berita.index') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('berita.*') ? 'border-amber-400 text-amber-400 bg-amber-900/50' : 'border-transparent text-amber-100 hover:text-white hover:bg-amber-800' }} text-base font-medium transition">Berita</a>
            <a href="{{ route('kontak') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('kontak') ? 'border-amber-400 text-amber-400 bg-amber-900/50' : 'border-transparent text-amber-100 hover:text-white hover:bg-amber-800' }} text-base font-medium transition">Kontak</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-stone-900 text-stone-400 py-12 mt-12 border-t border-amber-900/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-amber-500 font-serif text-2xl font-bold mb-4">Besalen GilangLipuro</h3>
                <p class="text-sm leading-relaxed">
                    Melestarikan warisan budaya luhur Nusantara melalui seni tempa keris tradisional. Menjaga nyala perapian empu dari masa ke masa.
                </p>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-4 text-lg">Tautan Cepat</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('home') }}" class="hover:text-amber-400 transition">Beranda</a></li>
                    <li><a href="{{ route('tentang') }}" class="hover:text-amber-400 transition">Tentang Kami</a></li>
                    <li><a href="{{ route('galeri') }}" class="hover:text-amber-400 transition">Galeri</a></li>
                    <li><a href="{{ route('berita.index') }}" class="hover:text-amber-400 transition">Berita</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-4 text-lg">Kontak</h4>
                <p class="text-sm mb-2">Gilangharjo, Pandak, Bantul<br>Daerah Istimewa Yogyakarta</p>
                <a href="https://wa.me/6281234567890" target="_blank" class="inline-flex items-center gap-2 text-amber-500 hover:text-amber-400 transition mt-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.347-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.876 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                    Hubungi Kami via WhatsApp
                </a>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-12 pt-6 border-t border-stone-800 text-center text-sm">
            <p>&copy; {{ date('Y') }} Besalen GilangLipuro. KKN Project. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
