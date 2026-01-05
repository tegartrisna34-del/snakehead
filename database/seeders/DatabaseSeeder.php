<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Clear existing data to avoid duplicates/confusion
        Product::truncate();
        Category::truncate();

        $categories = [
            ['name' => 'Channa Maru', 'image' => 'channa_maru_grade_aplus.png'],
            ['name' => 'Channa Pulchra', 'image' => null],
            ['name' => 'Channa Auranti', 'image' => null],
            ['name' => 'Channa Barca', 'image' => null]
        ];

        foreach ($categories as $catData) {
            $category = Category::create([
                'name' => $catData['name'],
                'slug' => Str::slug($catData['name'])
            ]);

            if ($catData['name'] === 'Channa Maru') {
                // Specific requested order for Channa Maru
                $maruProducts = [
                    [
                        'name' => 'Channa Maru Grade A+',
                        'image' => 'images/channa_maru_grade_aplus.png',
                        'price' => 5000000,
                    ],
                    [
                        'name' => 'Channa Maru Grade A',
                        'image' => 'images/channa_maru_grade_a.png',
                        'price' => 2500000,
                    ],
                    [
                        'name' => 'Channa Maru Standard',
                        'image' => 'images/channa_maru_standard.png',
                        'price' => 750000,
                    ],
                ];

                foreach ($maruProducts as $maru) {
                    Product::create([
                        'category_id' => $category->id,
                        'name' => $maru['name'],
                        'slug' => Str::slug($maru['name'] . '-' . rand(100, 999)),
                        'image' => $maru['image'],
                        'description' => 'Spesimen terbaik dengan pola bunga (flower) yang tegas, warna kuning/oranye yang cerah, dan mental yang agresif. Pilihan utama untuk kontes.',
                        'price' => $maru['price'],
                        'stock' => rand(1, 10),
                        'is_active' => true
                    ]);
                }
            } else {
                // Other categories
                for ($i = 1; $i <= 2; $i++) {
                    Product::create([
                        'category_id' => $category->id,
                        'name' => $catData['name'] . ' Grade ' . ($i == 1 ? 'A' : 'B'),
                        'slug' => Str::slug($catData['name'] . '-' . $i . '-' . rand(100, 999)),
                        'description' => 'Ikan predator eksotis dengan karakteristik unik. Dipilih langsung dari indukan berkualitas.',
                        'price' => rand(500000, 2000000),
                        'stock' => rand(1, 10),
                        'is_active' => true
                    ]);
                }
            }
        }
    }
}
