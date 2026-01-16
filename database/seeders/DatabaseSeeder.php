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
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Product::truncate();
        Category::truncate();
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $this->call([
            UserSeeder::class,
            EssentialCareSeeder::class,
        ]);

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

            // Define grades, prices, and default images for each type
            $grades = [
                ['name' => 'Grade A+', 'price' => 0, 'image' => 'images/channa_maru_grade_aplus.png'],
                ['name' => 'Grade A', 'price' => 0, 'image' => 'images/channa-blue-sample.png'],
                ['name' => 'Grade B', 'price' => 0, 'image' => 'images/thumb-1.png'],
                ['name' => 'Bahan', 'price' => 0, 'image' => 'images/thumb-2.png'],
            ];

            if ($catData['name'] === 'Channa Maru') {
                $grades[0]['price'] = 2000000;
                $grades[1]['price'] = 800000;
                $grades[2]['price'] = 400000;
                $grades[3]['price'] = 150000;
            } elseif ($catData['name'] === 'Channa Pulchra') {
                $grades[0]['price'] = 500000;
                $grades[1]['price'] = 350000;
                $grades[2]['price'] = 200000;
                $grades[3]['price'] = 85000;
                // Specific Pulchra images if available, otherwise defaults
            } elseif ($catData['name'] === 'Channa Auranti') {
                $grades[0]['price'] = 3000000;
                $grades[1]['price'] = 1500000;
                $grades[2]['price'] = 800000;
                $grades[3]['price'] = 450000;
            } elseif ($catData['name'] === 'Channa Barca') {
                $grades[0]['price'] = 50000000;
                $grades[1]['price'] = 20000000;
                $grades[2]['price'] = 1000000;
                $grades[3]['price'] = 600000;
            }

            foreach ($grades as $index => $g) {
                Product::create([
                    'category_id' => $category->id,
                    'name' => $catData['name'] . ' ' . $g['name'],
                    'slug' => Str::slug($catData['name'] . '-' . $g['name'] . '-' . rand(100, 999)),
                    'description' => $catData['name'] . ' ' . $g['name'] . ' pilihan dengan potensi warna dan mental yang menjanjikan. Sangat cocok untuk kolektor.',
                    'image' => $g['image'],
                    'price' => $g['price'],
                    'stock' => rand(1, 15),
                    'is_active' => true
                ]);
            }
        }
    }
}
