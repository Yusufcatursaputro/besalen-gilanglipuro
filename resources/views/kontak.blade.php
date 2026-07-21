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
                                Jl. Gilangharjo No. 12<br>
                                Desa Gilangharjo, Kec. Pandak<br>
                                Kab. Bantul, DI Yogyakarta 55761
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-amber-800/50 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-white text-lg mb-1">Hubungi Kami</h3>
                            <p class="text-amber-100/80 text-sm mb-4">Kami siap melayani pertanyaan seputar pemesanan, edukasi, atau kunjungan budaya.</p>
                            <a href="https://wa.me/6281234567890" target="_blank" class="inline-flex items-center gap-2 px-5 py-2.5 bg-green-600 hover:bg-green-500 text-white rounded-lg font-medium transition shadow-lg shadow-green-900/20">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.347-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.876 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                                Chat WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Peta Google Maps -->
            <div class="lg:w-2/3 p-2 bg-stone-100 relative min-h-[400px]">
                <!-- Embed Google Maps -->
                <iframe 
                    class="absolute inset-0 w-full h-full rounded-2xl" 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15808.790518712952!2d110.3168868!3d-7.9157201999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7b003a3d5e2195%3A0xc0fb13a0026e6d1c!2sGilangharjo%2C%20Pandak%2C%20Bantul%20Regency%2C%20Special%20Region%20of%20Yogyakarta!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid" 
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
