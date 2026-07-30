<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6 text-gray-900 border-b border-gray-200">
                    <h3 class="text-2xl font-bold mb-2">Selamat Datang, {{ Auth::user()->name }}</h3>
                    <p class="text-gray-600">Ini adalah dashboard manajemen konten untuk Besalen GilangLipuro.</p>
                </div>
            </div>

            <!-- Metrics -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Total Berita -->
                <div class="bg-amber-600 rounded-lg shadow-sm p-6 text-white flex items-center justify-between hover:bg-amber-700 transition">
                    <div>
                        <p class="text-amber-100 text-sm font-semibold uppercase tracking-wider mb-1">Total Berita</p>
                        <h4 class="text-4xl font-bold">{{ $totalPosts ?? 0 }}</h4>
                    </div>
                    <div class="w-14 h-14 bg-amber-500 rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-.586-1.414l-4.586-4.586A2 2 0 0015.414 3H15m-4 5h4"></path></svg>
                    </div>
                </div>

                <!-- Kelola Berita Link -->
                <a href="{{ route('dashboard.berita.index') }}" class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 flex items-center justify-between hover:shadow-md transition group">
                    <div>
                        <p class="text-gray-500 text-sm font-semibold uppercase tracking-wider mb-1">Aksi Cepat</p>
                        <h4 class="text-xl font-bold text-gray-800 group-hover:text-amber-600 transition">Kelola Berita</h4>
                    </div>
                    <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center group-hover:bg-amber-100 transition">
                        <svg class="w-5 h-5 text-gray-600 group-hover:text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                </a>
                
                <!-- Tambah Berita Link -->
                <a href="{{ route('dashboard.berita.create') }}" class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 flex items-center justify-between hover:shadow-md transition group">
                    <div>
                        <p class="text-gray-500 text-sm font-semibold uppercase tracking-wider mb-1">Aksi Cepat</p>
                        <h4 class="text-xl font-bold text-gray-800 group-hover:text-amber-600 transition">Tulis Berita</h4>
                    </div>
                    <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center group-hover:bg-amber-100 transition">
                        <svg class="w-5 h-5 text-gray-600 group-hover:text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    </div>
                </a>



                <!-- Total Empu -->
                <div class="bg-slate-700 rounded-lg shadow-sm p-6 text-white flex items-center justify-between hover:bg-slate-800 transition">
                    <div>
                        <p class="text-slate-300 text-sm font-semibold uppercase tracking-wider mb-1">Total Profil Empu</p>
                        <h4 class="text-4xl font-bold">{{ $totalEmpus ?? 0 }}</h4>
                    </div>
                    <div class="w-14 h-14 bg-slate-600 rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                </div>

                <!-- Kelola Empu Link -->
                <a href="{{ route('dashboard.empu.index') }}" class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 flex items-center justify-between hover:shadow-md transition group">
                    <div>
                        <p class="text-gray-500 text-sm font-semibold uppercase tracking-wider mb-1">Manajemen Tim</p>
                        <h4 class="text-xl font-bold text-gray-800 group-hover:text-amber-600 transition">Kelola Empu</h4>
                    </div>
                    <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center group-hover:bg-amber-100 transition">
                        <svg class="w-5 h-5 text-gray-600 group-hover:text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                </a>

                <!-- Tambah Empu Link -->
                <a href="{{ route('dashboard.empu.create') }}" class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 flex items-center justify-between hover:shadow-md transition group">
                    <div>
                        <p class="text-gray-500 text-sm font-semibold uppercase tracking-wider mb-1">Aksi Cepat</p>
                        <h4 class="text-xl font-bold text-gray-800 group-hover:text-amber-600 transition">Tambah Empu</h4>
                    </div>
                    <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center group-hover:bg-amber-100 transition">
                        <svg class="w-5 h-5 text-gray-600 group-hover:text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
