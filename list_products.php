<?php
include 'vendor/autoload.php';
$app = include 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();
$products = \App\Models\Product::with('category')->where('is_active', true)->get();
foreach($products as $p) {
    echo "ProductID: " . $p->id . " | Product: " . $p->name . " | Category: " . ($p->category->name ?? 'None') . " | CatSlug: " . ($p->category->slug ?? 'None') . "\n";
}
