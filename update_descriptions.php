<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Product;

$updates = [
    // Channa Maru (Section 1)
    'Channa Maru Grade A+' => 'Memiliki pola maru bulat penuh yang tersusun rapat dan konsisten di seluruh tubuh. Kontras warna sangat tajam dengan kesan bersih dan solid, mencerminkan kualitas barca maru terbaik untuk kolektor premium.',
    'Channa Maru Grade A' => 'Pola maru sudah terbentuk dengan cukup jelas dan menyebar merata, meski belum sepadat grade A+. Warna dan karakter tetap kuat, memberikan tampilan elegan khas barca maru berkualitas tinggi.',
    'Channa Maru Grade B' => 'Bentuk maru mulai terlihat namun masih belum utuh dan jaraknya belum rapat. Karakter dasar barca sudah ada, cocok bagi penghobi yang ingin menikmati proses perkembangan pola.',

    // Channa Pulchra (Section 2 - User wrote Barca Pulcra)
    'Channa Pulchra Grade A+' => 'Pulcra tampil dengan warna dasar cerah dan corak halus yang rapi serta bersih. Transisi warna lembut namun tegas, memberikan kesan anggun dan eksklusif yang jarang ditemukan.',
    'Channa Pulchra Grade A' => 'Pola pulcra sudah terlihat jelas dengan warna yang cukup stabil dan seimbang. Tampilan tetap menarik dan berkelas, menunjukkan karakter pulcra yang kuat meski belum maksimal.',
    'Channa Pulchra Grade B' => 'Corak pulcra mulai muncul namun masih samar dan belum dominan. Potensi warna dan pola masih bisa berkembang seiring perawatan yang tepat.',

    // Channa Auranti (Section 3 - User wrote Barca Auranti)
    'Channa Auranti Grade A+' => 'Warna auranti muncul tebal dan menyala dengan kilau keemasan yang kuat. Kontras antar warna sangat hidup, menjadikan tampilan ikan terlihat mewah dan berkarakter tinggi.',
    'Channa Auranti Grade A' => 'Auranti sudah tampak jelas dan menyebar dengan cukup merata. Warna terlihat stabil dan menarik, menampilkan karakter barca auranti yang solid.',
    'Channa Auranti Grade B' => 'Auranti masih tipis dan belum sepenuhnya keluar. Warna cenderung lembut namun memiliki potensi untuk meningkat seiring pertumbuhan dan perawatan.',
];

foreach ($updates as $name => $desc) {
    $product = Product::where('name', $name)->first();
    if ($product) {
        $product->description = $desc;
        $product->save();
        echo "Updated: $name\n";
    } else {
        echo "Not found: $name\n";
    }
}
echo "Done.\n";
