<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Extra Voucher - Snakehead Culture</title>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@800&family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { 
            background-color: #050505; 
            color: #ffffff; 
            font-family: 'Inter', sans-serif;
            min-height: screen;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .font-syne { font-family: 'Syne', sans-serif; }
        .glass { 
            background: rgba(255, 255, 255, 0.03); 
            backdrop-filter: blur(20px); 
            border: 1px solid rgba(255, 255, 255, 0.08); 
        }
    </style>
</head>
<body class="antialiased h-screen overflow-hidden">
    <div class="relative w-full h-full flex items-center justify-center p-6">
        <!-- Back Button -->
        <a href="{{ route('home') }}" class="absolute top-8 left-8 text-emerald-500 font-bold flex items-center gap-2 hover:underline">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Kembali
        </a>

        <div class="glass p-12 rounded-[2.5rem] text-center max-w-lg w-full relative overflow-hidden group">
            <!-- Decorative Glow -->
            <div class="absolute -top-24 -left-24 w-48 h-48 bg-emerald-500/10 rounded-full blur-[100px] group-hover:bg-emerald-500/20 transition-all duration-700"></div>
            
            <div class="relative">
                <div class="w-20 h-20 bg-emerald-500/10 rounded-2xl flex items-center justify-center mx-auto mb-8 border border-emerald-500/20">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                    </svg>
                </div>
                
                <h1 class="text-4xl font-extrabold font-syne mb-4 tracking-tight uppercase">Extra Voucher</h1>
                <p class="text-gray-400 text-lg font-light leading-relaxed">
                    Belum ada extra voucher tersedia saat ini. <br>
                    <span class="text-sm text-gray-500 italic">Cek kembali nanti untuk promo menarik lainnya!</span>
                </p>
                
                <div class="mt-12">
                    <a href="{{ route('home') }}" class="inline-block px-8 py-4 bg-emerald-500 hover:bg-emerald-600 text-white font-bold rounded-full transition-all duration-300 shadow-[0_10px_30px_rgba(16,185,129,0.3)]">
                        Mulai Belanja
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
