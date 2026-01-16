<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informasi Toko | Snakehead Culture</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Outfit', sans-serif; background-color: #0c1117; color: #e6edf3; }
        .glass { background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); }
        .snake-gradient { background: linear-gradient(135deg, #059669 0%, #10b981 100%); }
    </style>
</head>
<body class="antialiased min-h-screen py-20 px-4">
    <!-- Navigation -->
    <nav id="mainNav" class="fixed w-full z-50 px-6 py-6 items-center flex justify-center transition-transform duration-500 ease-in-out">
        <div class="max-w-7xl w-full glass rounded-full px-8 py-4 flex justify-between items-center border-white/10">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logo.png') }}" class="h-10 w-10 object-contain" alt="Logo">
                <span class="text-xl font-bold tracking-tighter uppercase">Snakehead <span class="text-emerald-500">Culture</span></span>
            </div>
            <div class="flex items-center space-x-6">
                <a href="{{ route('home') }}" class="text-emerald-500 hover:underline">← Kembali</a>
            </div>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto pt-32">
        <h1 class="text-5xl font-bold mb-4 text-center">Informasi</h1>
        <p class="text-gray-400 text-center mb-16">Menyediakan Channa kualitas premium dengan genetik terbaik untuk kolektor di seluruh Indonesia.</p>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            <!-- Store Information -->
            <div class="glass p-8 rounded-3xl h-fit">
                <h2 class="text-2xl font-bold mb-8">Snakehead Culture</h2>
                
                <div class="space-y-6">
                    <!-- Alamat -->
                    <div>
                        <h3 class="text-lg font-bold text-emerald-400 mb-2">Alamat</h3>
                        <p class="text-gray-300 leading-relaxed">
                            72Q6+4HR Ngeposan, RT.2/RW.13<br>
                            Purworejo, Kec. Purworejo<br>
                            Kabupaten Purworejo<br>
                            Jawa Tengah<br>
                            Indonesia
                        </p>
                    </div>

                    <!-- WhatsApp -->
                    <div>
                        <h3 class="text-lg font-bold text-emerald-400 mb-2">WhatsApp</h3>
                        <a href="https://wa.me/6288271887763" target="_blank" class="text-emerald-500 hover:text-emerald-400 font-bold flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20.52 3.48A11.9 11.9 0 0012 .1 11.88 11.88 0 001.28 9.86c0 2.11.55 4.16 1.6 5.99L0 24l8.41-2.2a11.88 11.88 0 004.59.95h.01c6.55 0 11.98-5.36 11.98-11.98 0-3.2-1.25-6.2-3.87-8.29zM12 21.5c-1.28 0-2.53-.34-3.61-.98l-.26-.15-5.01 1.31 1.32-4.9-.17-.29A9.18 9.18 0 012.8 9.88c0-5.01 4.07-9.08 9.08-9.08 2.42 0 4.69.94 6.4 2.66 1.7 1.7 2.64 3.98 2.64 6.42 0 5.01-4.07 9.08-9.08 9.08z"/></svg>
                                <span>+62 882-7188-7763</span>
                        </a>
                    </div>

                    <!-- Email -->
                    <div>
                        <h3 class="text-lg font-bold text-emerald-400 mb-2">Email</h3>
                        <a href="mailto:snakeheadculture@gmail.com" class="text-emerald-500 hover:text-emerald-400 font-bold">
                            snakeheadculture@gmail.com
                        </a>
                    </div>

                    <!-- Jam Operasional -->
                    <div>
                        <h3 class="text-lg font-bold text-emerald-400 mb-2">Jam Operasional</h3>
                        <div class="text-gray-300 space-y-1">
                            <p>Senin - Jumat: 09:00 - 17:00</p>
                            <p>Sabtu: 10:00 - 16:00</p>
                            <p>Minggu: 15:00 - 02:00</p>
                        </div>
                    </div>

                    <!-- Social / Shop Links -->
                    <div>
                        <h3 class="text-lg font-bold text-emerald-400 mb-2">Media Sosial & Marketplace</h3>
                        <ul class="text-gray-300 space-y-2">
                            <li>
                                <a href="https://www.tiktok.com/@snakeheadculture?_r=1&_t=ZS-92l7rujZHov" target="_blank" class="text-emerald-400 hover:underline">TikTok: @snakeheadculture</a>
                            </li>
                            <li>
                                <a href="https://shopee.co.id/snakeheadculture#product_list" target="_blank" class="text-emerald-400 hover:underline">Shopee: snakeheadculture</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Info Tambahan -->
                    <div>
                        <h3 class="text-lg font-bold text-emerald-400 mb-2">Layanan</h3>
                        <ul class="text-gray-300 space-y-2">
                            <li class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Konsultasi Gratis</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Pengiriman ke Seluruh Indonesia</span>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                <span>Garansi Kualitas Ikan Premium</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Map -->
            <div class="glass p-4 rounded-3xl h-fit">
                <h2 class="text-2xl font-bold mb-4 px-4 pt-4">Lokasi Kami</h2>
                <div class="rounded-2xl overflow-hidden" style="height:600px">
                    <iframe src="https://www.google.com/maps?q=Jl.+Urip+Sumoharjo+No.76,+Purworejo,+Jawa+Tengah+54151&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>

        <!-- Back Button -->
        <div class="text-center mt-16">
            <a href="{{ route('home') }}" class="px-10 py-4 snake-gradient rounded-full font-bold text-sm tracking-widest uppercase hover:shadow-[0_0_30px_rgba(16,185,129,0.4)] transition-all duration-300 inline-block">
                Kembali ke Beranda
            </a>
        </div>
    </div>

    <script>
        // Smart Navbar Logic
        (function() {
            const nav = document.getElementById('mainNav');
            let lastScrollY = window.scrollY;

            window.addEventListener('scroll', () => {
                if (window.scrollY > lastScrollY && window.scrollY > 100) {
                    nav.style.transform = 'translateY(-120%)';
                } else {
                    nav.style.transform = 'translateY(0)';
                }
                lastScrollY = window.scrollY;
            });
        })();
    </script>
</body>
</html>
