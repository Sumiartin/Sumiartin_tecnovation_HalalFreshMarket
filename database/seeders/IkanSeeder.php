<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ikan;

class IkanSeeder extends Seeder
{
    public function run(): void
    {
        Ikan::create([
            'nama' => 'Bayam',
            'gambar' => 'bayam.jpg',
            'keterangan' => 'Sayur hijau yang kaya akan zat besi.',
            'harga' => 5000,
        ]);

        Ikan::create([
            'nama' => 'Kangkung',
            'gambar' => 'kangkung.jpg',
            'keterangan' => 'Sayur yang biasanya ditumis dengan bawang putih.',
            'harga' => 4000,
        ]);

        Ikan::create([
            'nama' => 'Tomat',
            'gambar' => 'tomat.jpg',
            'keterangan' => 'Buah yang sering dianggap sebagai sayur, kaya akan vitamin C.',
            'harga' => 3000,
        ]);
        
        // Tambahkan lebih banyak data sayur jika diperlukan
    }
}
