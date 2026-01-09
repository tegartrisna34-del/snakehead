<footer class="bg-[#0b0b0b] text-gray-300 border-t border-orange-500/40 font-inter">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-12">
        @if(!isset($hideFooterFeatures) || !$hideFooterFeatures)
        <!-- Top features -->
        <div class="flex flex-col md:flex-row justify-center items-center mb-12 border-b border-white/5 pb-10 space-y-6 md:space-y-0 md:gap-24">
            <a href="{{ route('vouchers') }}" class="flex items-center space-x-4 group p-2 rounded-2xl hover:bg-white/5 transition-all duration-300 w-full md:w-auto">
                <div class="p-4 rounded-2xl bg-[#0f1720] border border-white/5 group-hover:border-emerald-500/50 group-hover:bg-emerald-500/5 transition-all flex-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div class="text-left">
                    <h4 class="font-bold text-white font-syne group-hover:text-emerald-400 transition-colors">Extra Voucher & Gratis Ongkir</h4>
                    <p class="text-xs text-gray-500 mt-1 italic">Klik untuk klaim voucher spesial</p>
                </div>
            </a>
            <div class="flex items-center space-x-4 p-2 w-full md:w-auto">
                <div class="text-left md:text-right order-2 md:order-1">
                    <h4 class="font-bold text-white font-syne">Customer Service 24 Jam</h4>
                    <p class="text-xs text-gray-500 mt-1">Kami siap menjawab keluhan anda 24/7</p>
                </div>
                <div class="p-4 rounded-2xl bg-[#0f1720] border border-white/5 flex-none order-1 md:order-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
            </div>
        </div>
        @endif

        <div class="{{ (!isset($hideFooterMenus) || !$hideFooterMenus) ? '' : '' }}">
            @if(!isset($hideFooterMenus) || !$hideFooterMenus)
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 lg:gap-12">
                <!-- Branding & Tagline -->
                <div class="md:col-span-4 text-center md:text-left">
                    <div class="flex items-center justify-center md:justify-start space-x-2 mb-6">
                        <span class="text-2xl font-bold font-syne italic text-white">SNAKEHEAD <span class="text-emerald-500">CULTURE</span></span>
                    </div>
                    <p class="text-sm text-gray-500 leading-relaxed mb-8 max-w-sm mx-auto md:mx-0">
                        Platform premium nomor satu untuk kolektor Channa Indonesia. Kami menjamin kualitas genetik dan kesehatan setiap spesimen.
                    </p>
                    <div class="flex items-center justify-center md:justify-start gap-6">
                        <!-- Social Icons -->
                        <a href="https://www.instagram.com/snakehead.culture?igsh=cWlwMXB0eWc2ZGQz" target="_blank" class="text-gray-400 hover:text-white hover:scale-110 transition-transform">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.153 1.772 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.468 4.77c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                        </a>
                        <a href="https://www.tiktok.com/@snakeheadculture?_r=1&_t=ZS-92l7rujZHov" target="_blank" class="text-gray-400 hover:text-white hover:scale-110 transition-transform">
                            <span class="sr-only">TikTok</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg> 
                        </a>
                        <a href="https://shopee.co.id/snakeheadculture#product_list" target="_blank" class="text-gray-400 hover:text-white hover:scale-110 transition-transform">
                            <span class="sr-only">Shopee</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19.924 8.74c-.066-2.583-.06-3.088-.84-4.888-.344-.794-.972-1.372-1.808-1.667-.5-.177-.872-.257-2.927-.257h-1.015V1.241C13.334.557 12.792 0 12.128 0h-3.41c-.664 0-1.206.557-1.206 1.241v.687H6.497C4.442.687 4.07.767 3.57 1.085c-.836.295-1.464.873-1.808 1.667-.78 1.8-1.5 5-2.006 13.913-.1 1.872.2 3.75 1 5.385.875 1.776 2.593 2.915 4.55 3.01 2.376.115 4.908.115 7.284 0 1.957-.095 3.675-1.234 4.55-3.01.8-1.635 1.1-3.513 1-5.385-.296-5.228-.687-7.234-.14-8.925h-.075zm-6.208.687c0 .605-.5.992-1.117.992-.617 0-1.117-.387-1.117-.992V2.233c0-.606.5-.993 1.117-.993.617 0 1.117.387 1.117.993v7.194zM8.599 2.233c0-.606.5-.993 1.117-.993.616 0 1.116.387 1.116.993v7.194c0 .605-.5.992-1.116.992-.617 0-1.117-.387-1.117-.992V2.233z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Column 2: Perusahaan (Centered) -->
                <div class="md:col-span-4 flex flex-col items-center text-center md:items-center">
                    <div>
                        <h5 class="font-bold text-white mb-6 uppercase tracking-wider text-xs">Perusahaan</h5>
                        <ul class="space-y-4 text-sm text-gray-400">
                            <li><a href="{{ route('store.info') }}" class="hover:text-emerald-400 transition-colors">Tentang Kami</a></li>
                            <li><a href="{{ route('gallery') }}" class="hover:text-emerald-400 transition-colors">Galeri</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Column 3: Contact -->
                <div class="md:col-span-4 text-center md:text-left">
                    <h5 class="font-bold text-white mb-6 uppercase tracking-wider text-xs">Hubungi Kami</h5>
                    <ul class="space-y-4 text-sm text-gray-400">
                        <li class="flex items-center justify-center md:items-start md:justify-start space-x-3">
                            <svg class="h-5 w-5 text-emerald-500 flex-none" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <a href="mailto:snakeheadculture@gmail.com" class="hover:text-emerald-400 transition-colors">snakeheadculture@gmail.com</a>
                        </li>
                        <li class="flex items-center justify-center md:items-start md:justify-start space-x-3">
                            <svg class="h-5 w-5 text-emerald-500 flex-none" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <a href="https://wa.me/6282136048824" target="_blank" class="hover:text-emerald-400 transition-colors">+62 821-3604-8824</a>
                        </li>
                        <li class="flex items-center justify-center md:items-start md:justify-start space-x-3">
                            <svg class="h-5 w-5 text-emerald-500 flex-none" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            <span>Setiap Hari | 08.00 - 22.00</span>
                        </li>
                    </ul>
                </div>
            </div>
            @endif

            <div class="{{ (!isset($hideFooterMenus) || !$hideFooterMenus) ? 'mt-16 border-t border-white/5 pt-8' : 'mt-8' }} text-xs text-gray-500 flex flex-col md:flex-row justify-between items-center">
                <p>&copy; {{ date('Y') }} Snakehead Culture. All Rights Reserved.</p>
                <div class="flex space-x-8 mt-4 md:mt-0">
                    <a href="#" class="hover:text-emerald-400 transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-emerald-400 transition-colors">Terms of Service</a>
                    <a href="#" class="hover:text-emerald-400 transition-colors">Cookie Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>

@if(!isset($hideFloatingWidget))
<!-- Floating Chat Widget -->
<div class="fixed bottom-28 right-6 z-50 flex items-center gap-3 group">
    <!-- Tooltip "Hubungi kami" -->
    <div id="chatTooltip" class="bg-white text-black px-4 py-2 rounded-lg shadow-[0_4px_20px_rgba(0,0,0,0.3)] text-sm font-bold font-syne transition-all duration-300 opacity-100 translate-x-0 relative group-hover:scale-105">
        Hubungi kami
        <!-- Triangle pointer -->
        <div class="absolute top-1/2 -right-1.5 w-3 h-3 bg-white transform -translate-y-1/2 rotate-45"></div>
    </div>

    <!-- Toggle Button -->
    <button id="chatButton" onclick="toggleChat()" class="w-[4.5rem] h-[4.5rem] bg-blue-500 rounded-full flex items-center justify-center shadow-[0_4px_25px_rgba(59,130,246,0.5)] hover:bg-blue-600 hover:scale-110 transition-all duration-300 transform border-2 border-white/20 relative overflow-hidden">
        <!-- Chat Icon -->
        <div id="chatIcon" class="transition-all duration-500 absolute inset-0 flex items-center justify-center rotate-0 scale-100 opacity-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white" viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd" d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 01-3.476.383.39.39 0 00-.297.17l-2.755 4.133a.75.75 0 01-1.248 0l-2.755-4.133a.39.39 0 00-.297-.17 48.9 48.9 0 01-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.678 3.348-3.97zM6.75 8.25a.75.75 0 01.75-.75h9a.75.75 0 010 1.5h-9a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H7.5z" clip-rule="evenodd" />
            </svg>
        </div>
        
        <!-- Close (X) Icon -->
        <div id="closeIcon" class="transition-all duration-500 absolute inset-0 flex items-center justify-center -rotate-180 scale-0 opacity-0">
             <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
    </button>
</div>

<!-- Chat Window (Initially Hidden) -->
<div id="chatMenu" class="fixed bottom-48 right-6 z-40 transition-all duration-300 transform scale-90 opacity-0 pointer-events-none origin-bottom-right">
    <div class="bg-[#1a1a1a] border border-white/10 rounded-3xl shadow-2xl w-80 backdrop-blur-xl overflow-hidden flex flex-col h-[450px]">
        <!-- Header -->
        <div class="p-4 bg-blue-600 flex items-center space-x-3">
            <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center relative">
                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/></svg>
                <span class="absolute bottom-0 right-0 w-3 h-3 bg-emerald-500 border-2 border-blue-600 rounded-full"></span>
            </div>
            <div>
                <h3 class="text-white font-bold font-syne text-sm">Channa Support Bot</h3>
                <p class="text-[10px] text-blue-100 italic">Selalu Online untuk Anda</p>
            </div>
        </div>

        <!-- Chat Body -->
        <div id="chatBody" class="flex-1 p-4 overflow-y-auto space-y-4 text-sm scroll-smooth">
            <!-- Bot Message -->
            <div class="flex items-start space-x-2">
                <div class="bg-blue-600/20 text-blue-100 p-3 rounded-2xl rounded-tl-none border border-white/5 max-w-[85%]">
                    Halo! 👋 Saya asisten virtual **Snakehead Culture**. Ada yang bisa saya bantu hari ini?
                </div>
            </div>
            
            <!-- Typing Indicator (Hidden) -->
            <div id="typingIndicator" class="hidden flex items-start space-x-2">
                <div class="bg-blue-600/10 text-gray-400 p-2 rounded-xl flex space-x-1">
                    <span class="w-1 h-1 bg-gray-500 rounded-full animate-bounce"></span>
                    <span class="w-1 h-1 bg-gray-500 rounded-full animate-bounce delay-100"></span>
                    <span class="w-1 h-1 bg-gray-500 rounded-full animate-bounce delay-200"></span>
                </div>
            </div>
        </div>

        <!-- Options / Input Area -->
        <div class="p-4 border-t border-white/10 bg-white/5">
            <div id="chatOptions" class="grid grid-cols-1 gap-2">
                <button onclick="botReply('cek_stok')" class="text-left p-2 rounded-xl bg-white/5 hover:bg-blue-600/20 border border-white/5 text-xs text-gray-300 hover:text-white transition-all">🐠 Cek Stok Ikan Terbaru</button>
                <button onclick="botReply('cek_ongkir')" class="text-left p-2 rounded-xl bg-white/5 hover:bg-blue-600/20 border border-white/5 text-xs text-gray-300 hover:text-white transition-all">🚚 Cek Ongkos Kirim</button>
                <button onclick="botReply('konfirmasi')" class="text-left p-2 rounded-xl bg-white/5 hover:bg-blue-600/20 border border-white/5 text-xs text-gray-300 hover:text-white transition-all">💳 Konfirmasi Pembayaran</button>
                <button onclick="botReply('admin')" class="text-left p-2 rounded-xl bg-blue-600 hover:bg-blue-500 border border-blue-500 text-xs text-white font-bold transition-all flex items-center justify-between">
                    <span>Bicara dengan Admin</span>
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.008-.57-.008-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.248-.57-.397m-5.472 7.618c-2.388 0-4.636-.636-6.611-1.742l-.474-.265-4.91 1.285 1.31-4.782-.303-.483c-1.272-2.026-1.944-4.385-1.944-6.812 0-7.058 5.742-12.8 12.8-12.8 3.419 0 6.636 1.332 9.055 3.75 2.419 2.418 3.75 5.636 3.75 9.055 0 7.058-5.741 12.802-12.802 12.802"/></svg>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleChat() {
        const btn = document.getElementById('chatButton');
        const tooltip = document.getElementById('chatTooltip');
        const chatIcon = document.getElementById('chatIcon');
        const closeIcon = document.getElementById('closeIcon');
        const chatMenu = document.getElementById('chatMenu');
        
        btn.classList.toggle('active');
        
        if (btn.classList.contains('active')) {
            tooltip.style.opacity = '0';
            tooltip.style.transform = 'translate(-20px, 0) scale(0.9)';
            chatIcon.style.cssText = 'transform: rotate(180deg) scale(0); opacity: 0;';
            closeIcon.style.cssText = 'transform: rotate(0deg) scale(1); opacity: 1;';
            chatMenu.style.opacity = '1';
            chatMenu.style.transform = 'scale(1)';
            chatMenu.style.pointerEvents = 'auto';
        } else {
            tooltip.style.opacity = '1';
            tooltip.style.transform = 'translate(0, 0) scale(1)';
            chatIcon.style.cssText = 'transform: rotate(0deg) scale(1); opacity: 1;';
            closeIcon.style.cssText = 'transform: rotate(-180deg) scale(0); opacity: 0;';
            chatMenu.style.opacity = '0';
            chatMenu.style.transform = 'scale(0.9)';
            chatMenu.style.pointerEvents = 'none';
        }
    }

    function botReply(type) {
        const chatBody = document.getElementById('chatBody');
        const typing = document.getElementById('typingIndicator');
        const options = {
            'cek_stok': 'Anda bisa melihat stok terbaru di bagian gallery atau langsung tanya admin untuk ketersediaan Channa pilihan Anda.',
            'cek_ongkir': 'Ongkos kirim dihitung berdasarkan lokasi Anda. Ingin saya bantu hubungkan ke kurir atau admin?',
            'konfirmasi': 'Untuk konfirmasi pembayaran, silakan kirim bukti transfer Anda langsung ke nomor WhatsApp Admin kami.',
            'admin': 'Siap! Saya hubungkan Anda langsung ke WhatsApp Admin...'
        };

        const userMessages = {
            'cek_stok': '🐠 Cek Stok Ikan Terbaru',
            'cek_ongkir': '🚚 Cek Ongkos Kirim',
            'konfirmasi': '💳 Konfirmasi Pembayaran',
            'admin': 'Bicara dengan Admin'
        };

        // Add User Message
        const userMsg = document.createElement('div');
        userMsg.className = 'flex justify-end';
        userMsg.innerHTML = `<div class="bg-white/10 text-white p-3 rounded-2xl rounded-tr-none border border-white/10 max-w-[85%]">${userMessages[type]}</div>`;
        chatBody.appendChild(userMsg);
        chatBody.scrollTop = chatBody.scrollHeight;

        // Show Typing
        typing.classList.remove('hidden');
        chatBody.appendChild(typing);
        chatBody.scrollTop = chatBody.scrollHeight;

        setTimeout(() => {
            typing.classList.add('hidden');
            
            // Add Bot Reply
            const botMsg = document.createElement('div');
            botMsg.className = 'flex items-start space-x-2';
            botMsg.innerHTML = `<div class="bg-blue-600/20 text-blue-100 p-3 rounded-2xl rounded-tl-none border border-white/5 max-w-[85%]">${options[type]}</div>`;
            chatBody.appendChild(botMsg);
            chatBody.scrollTop = chatBody.scrollHeight;

            if (type === 'admin') {
                setTimeout(() => {
                    window.open('https://wa.me/6282136048824?text=Halo%20Admin,%20saya%20butuh%20bantuan%20terkait%20pesanan%20saya', '_blank');
                }, 1000);
            }
        }, 1200);
    }
</script>
@endif
