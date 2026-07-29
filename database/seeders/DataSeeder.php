<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use App\Models\Gallery;
use App\Models\Empu;
use Illuminate\Support\Str;

class DataSeeder extends Seeder
{
    public function run(): void
    {
        // Define images from Unsplash that we want to download to use as seed images
        $imagesToDownload = [
            'empu1.jpg' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=500&q=80',
            'empu2.jpg' => 'https://images.unsplash.com/photo-1542157585-ef208ce6f721?w=500&q=80',
            
            'news1.jpg' => 'https://images.unsplash.com/photo-1590483838421-a4773c683ee3?w=800&q=80',
            'news2.jpg' => 'https://images.unsplash.com/photo-1590021319028-2d7c5a08502e?w=800&q=80',
            
            'galeri_proses.jpg' => 'https://images.unsplash.com/photo-1522869502446-f6d8924b6f12?w=600&q=80',
            'galeri_hasil.jpg' => 'https://images.unsplash.com/photo-1579737153673-9a3d6a6a0ec5?w=600&q=80',
            'galeri_kegiatan.jpg' => 'https://images.unsplash.com/photo-1544256718-3bcf237f3974?w=600&q=80',
        ];

        Storage::disk('public')->makeDirectory('seeders');

        foreach ($imagesToDownload as $filename => $url) {
            $path = 'seeders/' . $filename;
            if (!Storage::disk('public')->exists($path)) {
                $contents = @file_get_contents($url);
                if ($contents) {
                    Storage::disk('public')->put($path, $contents);
                }
            }
        }

        // Clear existing data to avoid duplicates if run multiple times
        Empu::truncate();
        Post::truncate();
        Gallery::truncate();

        // 1. Data Empu
        Empu::create([
            'name' => 'Ki Empu Sungkowo',
            'title' => 'Generasi ke-17 Empu Supo',
            'description' => 'Mendedikasikan hidupnya pada nyala api dan tempaan baja, Ki Empu telah berkarya lebih dari 40 tahun. Keahlian beliau dalam memadukan pamor dan merancang dhapur keris menjadikannya salah satu sosok sentral dalam pelestarian pusaka di wilayah ini.',
            'image' => 'seeders/empu1.jpg',
            'is_certified' => true,
        ]);

        Empu::create([
            'name' => 'Empu Budiarto',
            'title' => 'Pewaris Teknik Tempa Tradisional',
            'description' => 'Telah berkecimpung dalam dunia tosan aji sejak usia muda, Empu Budiarto dikenal karena keahliannya menciptakan detail bilah keris luk dengan tingkat presisi tinggi. Beliau juga aktif memberikan edukasi perkerisan kepada generasi muda.',
            'image' => 'seeders/empu2.jpg',
            'is_certified' => false,
        ]);

        // 2. Data Berita (Posts)
        Post::create([
            'title' => 'Kunjungan Edukasi Perkerisan dari Mahasiswa ISI',
            'slug' => Str::slug('Kunjungan Edukasi Perkerisan dari Mahasiswa ISI'),
            'content' => 'Pada akhir pekan lalu, puluhan mahasiswa dari Institut Seni Indonesia (ISI) melakukan kunjungan ke Besalen GilangLipuro. Kunjungan ini merupakan bagian dari mata kuliah preservasi budaya, di mana mahasiswa diberikan kesempatan untuk melihat langsung proses pembuatan keris dari awal hingga akhir, mulai dari pemilihan material, proses tempa, hingga pelipatan bahan pamor.',
            'image' => 'seeders/news1.jpg'
        ]);

        Post::create([
            'title' => 'Pameran Tosan Aji Nasional 2026 Segera Digelar',
            'slug' => Str::slug('Pameran Tosan Aji Nasional 2026 Segera Digelar'),
            'content' => 'Mempersiapkan perayaan kemerdekaan, komunitas pelestari tosan aji di Bantul bersama Besalen GilangLipuro sedang mempersiapkan Pameran Tosan Aji Nasional. Pameran ini rencananya akan memamerkan ratusan koleksi pusaka nusantara, dari era Majapahit, Mataram, hingga karya-karya kontemporer para empu muda.',
            'image' => 'seeders/news2.jpg'
        ]);

        // 3. Data Galeri
        Gallery::create([
            'title' => 'Bara Api dan Tempaan Pertama',
            'category' => 'proses',
            'image' => 'seeders/galeri_proses.jpg'
        ]);

        Gallery::create([
            'title' => 'Keris Sengkelat Luk 13',
            'category' => 'hasil',
            'image' => 'seeders/galeri_hasil.jpg'
        ]);

        Gallery::create([
            'title' => 'Pelatihan Pande Besi Muda',
            'category' => 'kegiatan',
            'image' => 'seeders/galeri_kegiatan.jpg'
        ]);
    }
}
