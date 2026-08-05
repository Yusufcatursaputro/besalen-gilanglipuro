<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
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
        Post::truncate();

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

        // Galeri data removed.
    }
}
