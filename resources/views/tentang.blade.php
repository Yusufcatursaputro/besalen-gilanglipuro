@extends('components.public-layout')

@section('title', 'Tentang Kami')

@section('content')
<!-- Header Banner -->
<div class="bg-amber-950 py-16 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-t from-amber-950 via-amber-900/60 to-transparent"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative text-center">
        <h1 class="text-4xl md:text-5xl font-serif font-bold text-white mb-4">Tentang Kami</h1>
        <p class="text-amber-400 font-medium tracking-wide">Mengenal Lebih Dalam Besalen GilangLipuro</p>
    </div>
</div>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-16 items-start">
            
            <!-- Sejarah Singkat -->
            <div class="lg:w-1/2 space-y-6">
                <div class="inline-flex items-center gap-2 text-amber-600 font-bold tracking-wider text-sm uppercase">
                    <span class="w-8 h-px bg-amber-600"></span> Sejarah Besalen
                </div>
                <h2 class="text-4xl font-serif font-bold text-slate-800 leading-tight">
                    Sejarah Besalen GilangLipuro
                </h2>
                <div class="prose prose-stone text-slate-600 max-w-none text-justify">
                    <h3 class="text-2xl font-serif text-slate-800 mt-2 mb-3">Jejak Wahyu di Selo Gilang Lipuro</h3>
                    <p class="leading-relaxed mb-4">
                        Sebelum dikenal sebagai tempat pembuatan keris, nama Gilang Lipuro sudah lebih dulu melekat pada sebuah petilasan bersejarah di Padukuhan Kauman, Kalurahan Gilangharjo, Kapanewon Pandak, Bantul. Di lokasi tersebut terdapat sebongkah batu berbentuk balok persegi panjang yang dikenal dengan nama Selo Gilang Lipuro, kini dilindungi dalam sebuah bangunan kecil dan tetap berada dalam pengawasan Keraton Ngayogyakarta.
                    </p>
                    <p class="leading-relaxed mb-4">
                        Menurut cerita turun temurun masyarakat setempat, tempat ini dahulu digunakan oleh Raden Danang Sutawijaya, yang kemudian dikenal sebagai Panembahan Senopati, untuk bertafakur sebagai bagian dari pencarian lokasi berdirinya sebuah kerajaan. Konon di tempat inilah beliau menerima pertanda atau wahyu sebelum akhirnya mendirikan keraton di sekitar Selo Gilang, yang kelak menjadi cikal bakal Kerajaan Mataram Islam. Nama Gilang kemudian diabadikan menjadi nama Desa Gilangharjo, sebagai penanda kebesaran zaman itu dan nilai-nilai luhur yang terus dijaga hingga sekarang.
                    </p>
                    <p class="leading-relaxed mb-6">
                        Cerita napak tilas inilah yang membuat kawasan Gilangharjo dipandang memiliki ikatan sejarah dan spiritual dengan lahirnya Mataram Islam, sebuah akar budaya yang kemudian menjadi salah satu alasan kuat kenapa tradisi menempa pusaka dihidupkan kembali di tanah ini.
                    </p>

                    <h3 class="text-2xl font-serif text-slate-800 mt-8 mb-3">Dari Petilasan ke Tradisi Perkerisan</h3>
                    <p class="leading-relaxed mb-4">
                        Dalam dunia perkerisan, setiap keris diperkirakan berasal dari suatu masa tertentu berdasarkan ciri fisiknya, mulai dari teknik pencampuran bahan, pamor, gaya, hingga bentuk perawakan bilah. Sistem penanggalan berdasarkan ciri ini dikenal dengan istilah tangguh tosan aji. Melalui tangguh, para pecinta dan peneliti keris dapat memperkirakan era pembuatan sebuah keris, mulai dari zaman Majapahit hingga era Mataram serta masa-masa sesudahnya termasuk gaya Ngayogyakarta.
                    </p>
                    <p class="leading-relaxed mb-4">
                        Bukti tertua penggunaan keris di tanah Jawa dapat dilihat dari relief-relief candi kuno, salah satunya yang menggambarkan adegan penempaan bilah di dalam sebuah tempat kerja atau besalen. Ini menunjukkan bahwa tradisi menempa keris sudah menjadi bagian dari kehidupan budaya Jawa sejak berabad-abad silam, jauh sebelum istilah besalen dipakai kembali untuk menamai rumah produksi keris seperti sekarang ini.
                    </p>
                    <p class="leading-relaxed mb-6">
                        Ketika Kasultanan Ngayogyakarta Hadiningrat berdiri, tradisi perkerisan pun berkembang dengan gaya atau gagrag tersendiri yang khas Yogyakarta, berbeda dengan gagrag di daerah lain. Warisan inilah yang kemudian diakui UNESCO sebagai Karya Agung Budaya Lisan dan Takbenda Warisan Manusia pada tahun 2005.
                    </p>

                    <h3 class="text-2xl font-serif text-slate-800 mt-8 mb-3">Menghidupkan Kembali Api Tempaan</h3>
                    <p class="leading-relaxed mb-4">
                        Meski memiliki akar sejarah yang kuat dengan lahirnya Mataram Islam, masyarakat Gilangharjo sebenarnya secara turun temurun lebih dikenal sebagai pande besi pembuat alat pertanian seperti cangkul, sabit, dan pisau, bukan sebagai pembuat keris. Dari sinilah muncul keresahan sekaligus semangat dari pemerintah setempat untuk membangkitkan kembali tradisi perkerisan di wilayah yang justru menjadi cikal bakal berdirinya kerajaan Mataram tersebut.
                    </p>
                    <p class="leading-relaxed mb-4">
                        Momentum kebangkitan itu terwujud setelah Kalurahan Gilangharjo ditetapkan sebagai Desa Mandiri Budaya dan memperoleh dukungan melalui program Bantuan Keuangan Khusus dari Dana Keistimewaan Daerah Istimewa Yogyakarta. Sebagian dukungan tersebut dimanfaatkan untuk mendirikan Rumah Produksi Keris atau besalen, sekaligus menyelenggarakan pelatihan alih keterampilan bagi para pande besi setempat. Sekitar dua puluh pande besi lokal dipilih dan dibina untuk beralih dari pembuat alat pertanian menjadi calon empu keris, dengan pendampingan dari pihak Dinas Kebudayaan Kabupaten Bantul. Kegiatan pelatihan serupa kembali dilaksanakan sebagai bagian dari upaya pengembangan kearifan lokal.
                    </p>
                    <p class="leading-relaxed mb-4">
                        Namun perjalanan menjadi empu bukanlah hal yang mudah maupun singkat. Dari puluhan pande besi yang awalnya mengikuti pelatihan, hanya sebagian kecil yang bertahan dan konsisten menekuni jalan sebagai pembuat keris hingga sekarang. Proses menempa keris yang menuntut kesabaran, ketelitian, serta laku tertentu memang secara alami menyaring siapa yang benar-benar bertahan di jalan ini.
                    </p>
                    <p class="leading-relaxed mb-4">
                        Kini, jejak besalen di Gilangharjo tersebar di beberapa titik, salah satunya di kawasan Jodog Karangasem, dan terus dikembangkan bukan hanya sebagai pusat produksi, tetapi juga diproyeksikan menjadi atraksi wisata budaya. Dari batu petilasan tempat wahyu Mataram diyakini pernah turun, kini denting palu para pengrajin yang bertahan itu menyambung kembali benang merah sejarah panjang tanah Gilangharjo dengan tradisi tosan aji Nusantara.
                    </p>
                </div>
            </div>

            <!-- Image/Ilustrasi -->
            <div class="lg:w-1/2 w-full relative lg:sticky lg:top-28">
                <div class="aspect-[4/5] md:aspect-video lg:aspect-[4/5] rounded-2xl overflow-hidden shadow-2xl relative z-10 border-4 border-white">
                    <img src="https://images.unsplash.com/photo-1590483838421-a4773c683ee3?auto=format&fit=crop&w=800&q=80" alt="Proses tempa keris" class="w-full h-full object-cover">
                </div>
                <!-- Decorative background elements -->
                <div class="absolute -bottom-6 -right-6 w-full h-full border-2 border-amber-500 rounded-2xl z-0"></div>
                <div class="absolute -top-6 -left-6 w-32 h-32 bg-amber-100 rounded-full blur-2xl z-0 opacity-50"></div>
            </div>
        </div>
    </div>
</section>

<!-- Profil Pengrajin -->
<section class="py-20 bg-stone-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm text-amber-600 font-bold tracking-widest uppercase mb-2">Sang Maestro</h2>
            <h3 class="text-4xl font-serif text-slate-800 font-bold">Profil Empu Pengrajin</h3>
            <div class="w-24 h-1 bg-amber-500 mx-auto mt-6 rounded-full"></div>
        </div>

        @forelse($empus as $empu)
        <div class="bg-white rounded-3xl shadow-lg border border-stone-100 overflow-hidden max-w-4xl mx-auto flex flex-col md:flex-row mb-8">
            <div class="md:w-2/5 shrink-0 bg-stone-200">
                <img src="{{ asset('storage/' . $empu->image) }}" alt="{{ $empu->name }}" class="w-full h-full object-cover object-center min-h-[300px]">
            </div>
            <div class="p-8 md:p-10 flex flex-col justify-center">
                <h4 class="text-2xl font-serif font-bold text-slate-800 mb-1">{{ $empu->name }}</h4>
                @if($empu->title)
                    <p class="text-amber-600 font-medium mb-6">{{ $empu->title }}</p>
                @endif
                <p class="text-slate-600 leading-relaxed mb-6">
                    {{ $empu->description }}
                </p>
                
                @if($empu->is_certified)
                <div class="flex gap-4 items-center">
                    <span class="inline-flex items-center gap-1 text-sm font-semibold text-stone-500">
                        <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                        Tersertifikasi Nasional
                    </span>
                </div>
                @endif
            </div>
        </div>
        @empty
        <div class="text-center text-gray-500 py-12">
            Belum ada data profil empu.
        </div>
        @endforelse
    </div>
</section>
@endsection
