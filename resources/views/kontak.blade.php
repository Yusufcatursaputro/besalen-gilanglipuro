@extends('components.public-layout')

@section('title', 'Kontak')

@section('content')
<!-- Header Banner -->
<div class="bg-stone-900 py-16 relative overflow-hidden">
    <div class="absolute inset-0 opacity-20 bg-[url('https://images.unsplash.com/photo-1542385151-efd9000785a0?auto=format&fit=crop&q=80')] bg-cover bg-center"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative text-center">
        <h1 class="text-4xl md:text-5xl font-serif font-bold text-white mb-4">Kontak Kami</h1>
        <p class="text-amber-400 font-medium tracking-wide">Kunjungi Kami di GilangLipuro</p>
    </div>
</div>

<section class="py-20 bg-[#fdfbf7]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-12 bg-white rounded-3xl shadow-xl overflow-hidden">
            
            <!-- Informasi Kontak -->
            <div class="lg:w-1/3 bg-amber-900 text-amber-50 p-10 md:p-12 flex flex-col justify-center">
                <h2 class="text-3xl font-serif font-bold text-white mb-8">Informasi Besalen</h2>
                
                <div class="space-y-8">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-amber-800/50 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-white text-lg mb-1">Alamat</h3>
                            <p class="text-amber-100/80 leading-relaxed text-sm">
                                38R6+VC6, Jl. Jodog, Jodog, Gilangharjo,<br>
                                Kec. Pandak, Kabupaten Bantul,<br>
                                Daerah Istimewa Yogyakarta 55761,<br>
                                Indonesia
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-amber-800/50 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-white text-lg mb-2">Hubungi Kami</h3>
                            <p class="text-amber-100/80 text-sm mb-6">
                                Untuk informasi mengenai Besalen GilangLipuro, kunjungan budaya, maupun pertanyaan lainnya, silakan hubungi:
                            </p>

                            <!-- Pangripta -->
                            <div class="mb-6">
                                <p class="text-white font-semibold">Siswantara</p>
                                <p class="text-amber-300 text-sm mb-2">Pangripta</p>
                                <p class="text-amber-100 text-sm mb-3">
                                📞 0812-1540-0507
                                </p>

                                <a href="https://wa.me/6281215400507"
                                    target="_blank"
                                    class="inline-flex items-center gap-2 px-4 py-2 bg-green-600 hover:bg-green-500 text-white rounded-lg text-sm font-medium transition">
                                    💬 Chat WhatsApp
                                </a>
                            </div>

                        <!-- Empu Keris -->
                        <div>
                            <p class="text-white font-semibold">Santo</p>
                            <p class="text-amber-300 text-sm mb-2">Empu Keris</p>
                            <p class="text-amber-100 text-sm mb-3">
                            📞 0857-4000-6799
                            </p>

                            <a href="https://wa.me/6285740006799"
                                target="_blank"
                                class="inline-flex items-center gap-2 px-4 py-2 bg-green-600 hover:bg-green-500 text-white rounded-lg text-sm font-medium transition">
                                💬 Chat WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- Peta Google Maps -->
            <div class="lg:w-2/3 p-2 bg-stone-100 relative min-h-[400px]">
                <!-- Embed Google Maps -->
                <iframe 
                    class="absolute inset-0 w-full h-full rounded-2xl" 
                    src="https://maps.google.com/maps?q=-7.907714,110.311002&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>
    </div>
</section>
@endsection
