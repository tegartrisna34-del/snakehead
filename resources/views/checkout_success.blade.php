<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesanan Berhasil | Snakehead Culture</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Outfit', sans-serif; background-color: #0c1117; color: #e6edf3; }
        .glass { background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); }
        .snake-gradient { background: linear-gradient(135deg, #059669 0%, #10b981 100%); }
    </style>
</head>
<body class="antialiased min-h-screen flex items-center justify-center p-4">
    <div class="max-w-md w-full glass p-10 rounded-[3rem] text-center">
        <div class="h-20 w-20 snake-gradient rounded-full flex items-center justify-center mx-auto mb-8 shadow-xl">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
            </svg>
        </div>
        <h1 class="text-3xl font-bold mb-2">Pesanan Berhasil!</h1>
        <p class="text-gray-500 mb-8">Terima kasih telah berbelanja di Snakehead Culture. Pesanan Anda sedang diproses.</p>
        
        <div class="bg-white/5 rounded-2xl p-4 mb-8">
            <p class="text-xs text-gray-500 uppercase tracking-widest mb-1">Nomor Pesanan</p>
            <p class="text-xl font-mono font-bold text-emerald-500">{{ $orderNumber }}</p>
        </div>

        <a href="{{ route('home') }}" class="block w-full py-4 glass rounded-2xl font-bold hover:bg-white/10 transition">Kembali ke Beranda</a>
    </div>
</body>
</html>
