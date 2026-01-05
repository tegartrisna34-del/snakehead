<footer class="bg-[#0b0b0b] text-gray-300 border-t border-orange-500/40">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-10">
        <!-- Top features -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="flex items-start space-x-4">
                <div class="p-3 rounded-full bg-[#0f1720]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 7h18M3 12h18M3 17h18"/></svg>
                </div>
                <div>
                    <h4 class="font-bold text-white">Flash Sale setiap hari</h4>
                    <p class="text-sm text-gray-400">Dapatkan diskon menarik setiap hari</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <div class="p-3 rounded-full bg-[#0f1720]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 7h18M3 12h18M3 17h18"/></svg>
                </div>
                <div>
                    <h4 class="font-bold text-white">Extra Voucher & Gratis Ongkir</h4>
                    <p class="text-sm text-gray-400">Syarat dan ketentuan berlaku</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <div class="p-3 rounded-full bg-[#0f1720]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 8a6 6 0 11-12 0 6 6 0 0112 0zM2 20a10 10 0 0120 0"/></svg>
                </div>
                <div>
                    <h4 class="font-bold text-white">Customer Service 24 Jam</h4>
                    <p class="text-sm text-gray-400">Kami siap menjawab keluhan anda 24/7</p>
                </div>
            </div>
        </div>

        <div class="border-t border-white/6 pt-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h5 class="font-bold text-white mb-4">Bantuan</h5>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-emerald-400">Pengiriman</a></li>
                        <li><a href="#" class="hover:text-emerald-400">Pembayaran</a></li>
                        <li><a href="#" class="hover:text-emerald-400">Tentang Akun Anda</a></li>
                        <li><a href="#" class="hover:text-emerald-400">Tentang Produk</a></li>
                    </ul>
                </div>

                <div>
                    <h5 class="font-bold text-white mb-4">Perusahaan</h5>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="{{ route('store.info') }}" class="hover:text-emerald-400">Informasi</a></li>
                        <li><a href="{{ route('location') }}" class="hover:text-emerald-400">Lokasi Toko</a></li>
                    </ul>
                </div>

                <div>
                    <h5 class="font-bold text-white mb-4">Hubungi Kami</h5>
                    <p class="text-gray-300">cs@snakeheadculture.com</p>
                    <p class="text-gray-300">+62 821-3604-8824</p>
                    <p class="text-gray-400 mt-3">Setiap Hari | 08.00 - 22.00</p>

                    <div class="flex items-center justify-center gap-8 mt-6">
                        <!-- Instagram Official Logo -->
                        <a href="https://www.instagram.com/snakehead.culture?igsh=cWlwMXB0eWc2ZGQz" target="_blank" class="flex flex-col items-center transition transform hover:scale-110" title="Follow on Instagram">
                            <svg class="w-14 h-14 mb-2" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="instagramGradient" x1="0%" y1="100%" x2="100%" y2="0%">
                                        <stop offset="0%" style="stop-color:#feda75;stop-opacity:1" />
                                        <stop offset="5%" style="stop-color:#fa7e1e;stop-opacity:1" />
                                        <stop offset="45%" style="stop-color:#d92e7f;stop-opacity:1" />
                                        <stop offset="60%" style="stop-color:#9b36b7;stop-opacity:1" />
                                        <stop offset="90%" style="stop-color:#515bd4;stop-opacity:1" />
                                    </linearGradient>
                                </defs>
                                <!-- Rounded square background -->
                                <rect x="20" y="20" width="160" height="160" rx="35" fill="url(#instagramGradient)"/>
                                <!-- Inner white rounded square -->
                                <rect x="45" y="45" width="110" height="110" rx="25" fill="none" stroke="white" stroke-width="12"/>
                                <!-- Camera circle center -->
                                <circle cx="100" cy="100" r="28" fill="none" stroke="white" stroke-width="10"/>
                                <!-- Flash dot -->
                                <circle cx="140" cy="60" r="8" fill="white"/>
                            </svg>
                            <span class="text-xs text-gray-300 font-medium">Instagram</span>
                        </a>

                        <!-- TikTok Official Logo -->
                        <a href="https://www.tiktok.com/@snakeheadculture?_r=1&_t=ZS-92l7rujZHov" target="_blank" class="flex flex-col items-center transition transform hover:scale-110" title="Follow on TikTok">
                            <svg class="w-14 h-14 mb-2" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="tiktokGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" style="stop-color:#25f4ee;stop-opacity:1" />
                                        <stop offset="100%" style="stop-color:#ff0050;stop-opacity:1" />
                                    </linearGradient>
                                </defs>
                                <!-- Black circle background -->
                                <circle cx="100" cy="100" r="100" fill="black"/>
                                <!-- Musical note with gradient -->
                                <g transform="translate(70, 50)">
                                    <!-- First note head -->
                                    <ellipse cx="15" cy="70" rx="12" ry="14" fill="url(#tiktokGradient)"/>
                                    <!-- Second note head -->
                                    <ellipse cx="45" cy="55" rx="12" ry="14" fill="url(#tiktokGradient)"/>
                                    <!-- Connecting stems -->
                                    <path d="M 27 56 Q 35 40 45 41" stroke="url(#tiktokGradient)" stroke-width="8" fill="none" stroke-linecap="round"/>
                                    <line x1="15" y1="55" x2="15" y2="10" stroke="url(#tiktokGradient)" stroke-width="8" stroke-linecap="round"/>
                                </g>
                            </svg>
                            <span class="text-xs text-gray-300 font-medium">TikTok</span>
                        </a>

                        <!-- Shopee Official Logo -->
                        <a href="https://shopee.co.id/snakeheadculture#product_list" target="_blank" class="flex flex-col items-center transition transform hover:scale-110" title="Visit Shopee">
                            <svg class="w-14 h-14 mb-2" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="shopeeGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" style="stop-color:#ff6b6b;stop-opacity:1" />
                                        <stop offset="100%" style="stop-color:#ff4444;stop-opacity:1" />
                                    </linearGradient>
                                </defs>
                                <!-- Rounded square red background -->
                                <rect x="20" y="20" width="160" height="160" rx="30" fill="url(#shopeeGradient)"/>
                                <!-- Shopping bag with handle -->
                                <g transform="translate(50, 50)">
                                    <!-- Bag body -->
                                    <path d="M 15 25 L 20 10 Q 50 5 80 10 L 85 25 L 85 90 Q 85 100 75 100 L 25 100 Q 15 100 15 90 Z" fill="white" stroke="white" stroke-width="2"/>
                                    <!-- Handle -->
                                    <path d="M 35 25 Q 50 5 65 25" fill="none" stroke="white" stroke-width="6" stroke-linecap="round"/>
                                </g>
                            </svg>
                            <span class="text-xs text-gray-300 font-medium">Shopee</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-8 border-t border-white/6 pt-6 text-sm text-gray-500 flex flex-col md:flex-row justify-between items-center">
                <p>&copy; {{ date('Y') }} Snakehead Culture. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-emerald-400">Privacy Policy</a>
                    <a href="#" class="hover:text-emerald-400">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
</footer>
