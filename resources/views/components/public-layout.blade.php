<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Besalen GilangLipuro') }} - @yield('title', 'Warisan Budaya Keris')</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo-besalen.png') }}">

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
                        <img src="{{ asset('images/logo-besalen.png') }}" alt="Logo Besalen" class="w-12 h-12 object-contain bg-white rounded-full p-1">
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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-[1.6fr_1fr_1.2fr] gap-12">
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

                <p class="text-sm mb-4">
                    Gilangharjo, Pandak, Bantul<br>
                    Daerah Istimewa Yogyakarta
                </p>

                <div class="space-y-4 text-sm">
                    <div>
                        <p class="text-white font-medium">Siswantara</p>
                        <p class="text-amber-500">Pangripta</p>
                        <p>📞 0812-1540-0507</p>
                    </div>

                    <div>
                        <p class="text-white font-medium">Santo</p>
                        <p class="text-amber-500">Empu Keris</p>
                        <p>📞 0857-4000-6799</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-12 pt-6 border-t border-stone-800 text-center text-sm">
            <p>&copy; {{ date('Y') }} Besalen GilangLipuro. KKN Project. All rights reserved.</p>

            <div class="flex justify-center items-center gap-6 mt-4">
                <img src="{{ asset('images/logo-besalen.png') }}"
                    alt="Logo Besalen"
                    class="h-12 w-auto">

                <img src="{{ asset('images/logo-ugm.png') }}"
                    alt="Logo UGM"
                    class="h-14 w-auto">
            </div>
        </div>

</footer>
</body>
</html>
