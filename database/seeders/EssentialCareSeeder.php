<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EssentialCareSeeder extends Seeder
{
    public function run()
    {
        // Create Supplies Category
        $supplies = Category::firstOrCreate(
            ['slug' => 'supplies'],
            ['name' => 'Supplies']
        );

        $products = [
            [
                'name' => 'Max Growth Pellets',
                'price' => 150000,
                'description' => 'Formula tinggi protein untuk pertumbuhan cepat dan peningkatan warna yang cerah. Mengandung astaxanthin murni untuk pigmentasi merah yang tajam.',
                'image' => 'images/pallet.jpg',
                'stock' => 50,
                'unit' => 'Pack',
                'specifications' => [
                    'Ukuran' => '1.5mm / 2.0mm',
                    'Berat' => '100g',
                    'Kandungan' => 'Protein 45%, Lemak 5%, Fiber 3%',
                    'Cara Pakai' => 'Berikan 2-3 kali sehari secukupnya.',
                ]
            ],
            [
                'name' => 'Premium Ketapang',
                'price' => 45000,
                'description' => 'Daun Ketapang pilihan untuk menciptakan lingkungan air hitam alami bagi ikan. Membantu menurunkan pH air secara perlahan dan sebagai anti-septik alami.',
                'image' => 'images/premium ketapang.jpg',
                'stock' => 100,
                'unit' => 'Botol',
                'specifications' => [
                    'Isi' => '10 Lembar + Ekstrak Peat',
                    'Fungsi' => 'Meningkatkan Bakat Bunga & Warna',
                    'Daya Tahan' => 'Efektif hingga 2 minggu per lembar',
                ]
            ],
            [
                'name' => 'Pasir Malang Merah',
                'price' => 25000,
                'description' => 'Pasir vulkanik merah yang sudah dicuci. Sangat cocok untuk menonjolkan warna Channa dan sebagai media tanam alami.',
                'image' => 'images/pasir malang merah.jpg',
                'stock' => 200,
                'unit' => 'Pack',
                'specifications' => [
                    'Ukuran' => 'Halus / Sedang',
                    'Berat' => '1kg / pack',
                    'Warna' => 'Merah Alami (Tanpa Pewarna)',
                ]
            ],
            [
                'name' => 'Aquascape Set',
                'price' => 120000,
                'description' => 'Peralatan stainless steel premium untuk perawatan dan penataan tanaman akuarium. Terdiri dari gunting, pinset, dan sand flattener.',
                'image' => 'images/aquascap set.jpeg',
                'stock' => 15,
                'unit' => 'Set',
                'specifications' => [
                    'Material' => 'Stainless Steel 304',
                    'Isi Set' => 'Pinset Lurus, Pinset Bengkok, Gunting Lurus',
                    'Panjang' => '25cm',
                ]
            ],
            [
                'name' => 'Bio-Active Probio',
                'price' => 65000,
                'description' => 'Probiotik konsentrat untuk air kristal bening dan kesehatan pencernaan ikan. Menghancurkan sisa kotoran dan amonia berbahaya.',
                'image' => 'images/binasyifa_bio_channa_kapsul_ikan_gabus_binasyifa_mandiri_full02_a028ea37.webp',
                'stock' => 30,
                'unit' => 'Botol',
                'specifications' => [
                    'Volume' => '100ml',
                    'Dosis' => '5ml per 100L air',
                    'Kandungan' => 'Bacillus subtilis, Nitrobacter',
                ]
            ],
            [
                'name' => 'Pro LED Spot',
                'price' => 350000,
                'description' => 'Spektrum cahaya yang dirancang khusus untuk menonjolkan pola warna Channa. Hemat energi dengan intensitas cahaya tinggi.',
                'image' => 'images/led sport.jpg',
                'stock' => 12,
                'unit' => 'Unit',
                'specifications' => [
                    'Daya' => '15 Watt',
                    'Warna' => 'Cool White / Deep Blue',
                    'Kelvin' => '10000K',
                    'Kabel' => '1.5 Meter',
                ]
            ],
            [
                'name' => 'Bio-Ceramic Rings',
                'price' => 55000,
                'description' => 'Media biologis berpori tinggi untuk area kolonisasi bakteri yang luas. Membantu menjaga siklus nitrogen akuarium tetap stabil.',
                'image' => 'images/bio ceramic rings.jpg',
                'stock' => 80,
                'unit' => 'Pack',
                'specifications' => [
                    'Isi' => '500g / pack',
                    'Luas Permukaan' => '1200m2 / liter',
                    'Material' => 'Ceramic Porous',
                ]
            ],
        ];

        foreach ($products as $p) {
            Product::updateOrCreate(
                ['slug' => Str::slug($p['name'])],
                array_merge($p, [
                    'category_id' => $supplies->id,
                    'is_active' => true,
                ])
            );
        }
    }
}
