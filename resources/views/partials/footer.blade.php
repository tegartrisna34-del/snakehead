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
            <div class="flex items-center space-x-4 group p-2 rounded-2xl hover:bg-white/5 transition-all duration-300 w-full md:w-auto">
                <div class="text-left md:text-right order-2 md:order-1">
                    <h4 class="font-bold text-white font-syne group-hover:text-emerald-400 transition-colors">Customer Service 24 Jam</h4>
                    <p class="text-xs text-gray-500 mt-1 italic">Siap melayani keluhan kolektor 24/7</p>
                </div>
                <div class="p-4 rounded-2xl bg-[#0f1720] border border-white/5 group-hover:border-emerald-500/50 group-hover:bg-emerald-500/5 transition-all flex-none order-1 md:order-2">
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
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.344 3.608 1.319.975.975 1.256 2.242 1.319 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.344 2.633-1.319 3.608-.975.975-2.242 1.256-3.608 1.319-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.344-3.608-1.319-.975-.975-1.256-2.242-1.319-3.608-.058-1.266-.07-1.646-.07-4.85s.012-3.584.07-4.85c.062-1.366.344-2.633 1.319-3.608.975-.975 2.242-1.256 3.608-1.319 1.266-.058 1.646-.07 4.85-.07zm0-2.163c-3.259 0-3.667.014-4.947.072-1.277.057-2.148.258-2.911.554-.789.306-1.459.717-2.126 1.384s-1.078 1.337-1.384 2.126c-.296.763-.497 1.634-.554 2.911-.058 1.28-.072 1.688-.072 4.947s.014 3.667.072 4.947c.057 1.277.258 2.148.554 2.911.306.789.717 1.459 1.384 2.126s1.337 1.078 2.126 1.384c.763.296 1.634.497 2.911.554 1.28.058 1.688.072 4.947.072s3.667-.014 4.947-.072c1.277-.057 2.148-.258 2.911-.554.789-.306 1.459-.717 2.126-1.384s1.078-1.337 1.384-2.126c.296-.763.497-1.634.554-2.911.058-1.28.072-1.688.072-4.947s-.014-3.667-.072-4.947c-.057-1.277-.258-2.148-.554-2.911-.306-.789-.717-1.459-1.384-2.126s-1.337-1.078-2.126-1.384c-.763-.296-1.634-.497-2.911-.554-1.28-.058-1.688-.072-4.947-.072zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.791-4-4s1.791-4 4-4 4 1.791 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a href="https://www.tiktok.com/@snakeheadculture?_r=1&_t=ZS-92l7rujZHov" target="_blank" class="text-gray-400 hover:text-white hover:scale-110 transition-transform">
                            <span class="sr-only">TikTok</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1.04-.1z"/></svg>
                        </a>
                        <a href="https://shopee.co.id/snakeheadculture#product_list" target="_blank" class="text-gray-400 hover:text-[#EE4D2D] hover:scale-110 transition-transform">
                            <span class="sr-only">Shopee</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19.924 10.43c-.066-2.583-.06-3.088-.84-4.888-.344-.794-.972-1.372-1.808-1.667-.5-.177-.872-.257-2.927-.257h-1.015V1.931C13.334 1.247 12.792.69 12.128.69h-3.41c-.664 0-1.206.557-1.206 1.241v.687H6.497C4.442.69 4.07.77 3.57 1.088c-.836.295-1.464.873-1.808 1.667-.78 1.8-1.5 5-2.006 13.913-.1 1.872.2 3.75 1 5.385.875 1.776 2.593 2.915 4.55 3.01 2.376.115 4.908.115 7.284 0 1.957-.095 3.675-1.234 4.55-3.01.8-1.635 1.1-3.513 1-5.385-.296-5.228-.687-7.234-.14-8.925z"/>
                            </svg>
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
                            <a href="https://wa.me/6288271887763" target="_blank" class="hover:text-emerald-400 transition-colors">+62 882-7188-7763</a>
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
<div id="chatWidget" class="fixed bottom-10 right-6 z-50 flex items-center gap-3 group opacity-0 pointer-events-none transition-all duration-500 translate-y-10">
    <!-- Tooltip "Hubungi kami" -->
    <div id="chatTooltip" class="bg-white text-black px-4 py-2 rounded-lg shadow-[0_4px_20px_rgba(0,0,0,0.3)] text-sm font-bold font-syne transition-all duration-300 opacity-100 translate-x-0 relative group-hover:scale-105">
        Hubungi kami
        <!-- Triangle pointer -->
        <div class="absolute top-1/2 -right-1.5 w-3 h-3 bg-white transform -translate-y-1/2 rotate-45"></div>
    </div>

    <!-- Toggle Button -->
    <button id="chatButton" onclick="toggleChat()" class="relative w-16 h-16 flex items-center justify-center group outline-none">
        <!-- Outer Glow Ring -->
        <div class="absolute inset-2 rounded-full bg-emerald-500/10 blur-lg group-hover:bg-emerald-500/30 transition-all duration-700 animate-pulse"></div>
        
        <!-- Main Circular Body -->
        <div class="relative w-12 h-12 rounded-full glass border-white/20 flex items-center justify-center shadow-xl group-hover:scale-110 transition-all duration-500 overflow-hidden bg-gradient-to-br from-white/10 to-transparent">
            <!-- Inner Emerald Core -->
            <div class="absolute inset-1.5 rounded-full bg-emerald-500/10 blur-sm opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
            
            <!-- Chat Icon -->
            <div id="chatIcon" class="transition-all duration-700 absolute inset-0 flex items-center justify-center scale-100 opacity-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-emerald-400 group-hover:text-emerald-300 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
            </div>
            
            <!-- Close Icon -->
            <div id="closeIcon" class="transition-all duration-700 absolute inset-0 flex items-center justify-center -rotate-180 scale-0 opacity-0">
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>
        </div>
    </button>
</div>

<!-- Chat Window (Premium Redesign) -->
<div id="chatMenu" class="fixed bottom-28 right-8 z-40 transition-all duration-500 transform scale-90 translate-y-10 opacity-0 pointer-events-none origin-bottom-right">
    <div class="bg-[#050505]/80 border border-white/10 rounded-[2rem] shadow-[0_30px_100px_rgba(0,0,0,0.8)] w-72 backdrop-blur-3xl overflow-hidden flex flex-col h-[450px]">
        <!-- Header: Elite Visuals -->
        <div class="p-7 pb-5 relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-emerald-500/50 to-transparent"></div>
            <div class="flex items-center space-x-4 relative z-10">
                <div class="w-12 h-12 rounded-xl glass border-emerald-500/20 flex items-center justify-center relative shadow-inner">
                    <img src="{{ asset('images/logo.png') }}" class="w-7 h-7 opacity-90 brightness-150" alt="">
                    <span class="absolute -bottom-1 -right-1 w-4 h-4 bg-emerald-500 border-4 border-[#0a0a0a] rounded-full"></span>
                </div>
                <div>
                    <h3 class="text-white font-black font-syne text-base tracking-tighter uppercase italic">Culture <span class="text-emerald-500">Concierge</span></h3>
                    <div class="flex items-center space-x-2 mt-1">
                        <div class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></div>
                        <p class="text-[9px] text-gray-400 font-bold uppercase tracking-[0.2em]">Operational Specialist Online</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Body: Message Timeline -->
        <div id="chatContent" class="hidden flex-1 p-0 overflow-hidden flex flex-col">
            <div id="chatBody" class="flex-1 p-7 overflow-y-auto space-y-6 text-[13px] scroll-smooth">
                <!-- Messages will appear here -->
                <!-- Typing Indicator -->
                <div id="typingIndicator" class="hidden flex items-start">
                    <div class="glass border-white/5 opacity-50 p-2.5 rounded-2xl flex space-x-1.5">
                        <span class="w-1 h-1 bg-emerald-400 rounded-full animate-bounce"></span>
                        <span class="w-1 h-1 bg-emerald-400 rounded-full animate-bounce [animation-delay:0.2s]"></span>
                        <span class="w-1 h-1 bg-emerald-400 rounded-full animate-bounce [animation-delay:0.4s]"></span>
                    </div>
                </div>
            </div>

            <!-- Dynamic Actions Area -->
            <div class="p-5 pt-2 border-t border-white/5 bg-[#0a0a0a]/50">
                <div id="chatOptions" class="grid grid-cols-1 gap-2.5">
                    <button onclick="botReply('cek_stok')" class="group relative flex items-center justify-between p-3.5 rounded-xl glass border-white/5 hover:border-emerald-500/30 transition-all text-left">
                        <span class="text-[10px] font-bold text-gray-400 group-hover:text-emerald-400 uppercase tracking-widest transition-colors">Catalogue Access</span>
                        <svg class="w-3.5 h-3.5 text-gray-600 group-hover:text-emerald-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </button>
                </div>
                
                <!-- Message Input Area -->
                <div class="mt-4 flex items-center gap-2 bg-white/5 p-2 rounded-2xl border border-white/10 group-focus-within:border-emerald-500/50 transition-all">
                    <input type="text" id="chatInput" placeholder="Tanya sesuatu..." class="flex-1 bg-transparent border-none outline-none text-[11px] text-white placeholder-gray-500 px-2 py-1">
                    <button onclick="handleSendMessage()" class="p-2 bg-emerald-500 rounded-xl hover:bg-emerald-400 transition-colors shadow-lg">
                        <svg class="w-3.5 h-3.5 text-[#050505]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7"/></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Pre-Chat Login Form -->
        <div id="chatAuth" class="flex-1 p-7 flex flex-col justify-center space-y-6">
            <div class="text-center space-y-2">
                <h4 class="text-white font-syne font-bold text-lg">Identity Verification</h4>
                <p class="text-[11px] text-gray-400 uppercase tracking-widest">Silakan isi detail untuk memulai</p>
            </div>
            
            <div class="space-y-4">
                <div class="space-y-1.5">
                    <label class="text-[9px] text-gray-500 uppercase font-black ml-1 tracking-widest">Nama Panjang</label>
                    <input type="text" id="authName" placeholder="" class="w-full bg-white/5 border border-white/10 rounded-xl p-3 text-white text-xs outline-none focus:border-emerald-500/50 transition-all">
                </div>
                <div class="space-y-1.5">
                    <label class="text-[9px] text-gray-500 uppercase font-black ml-1 tracking-widest">Email Address</label>
                    <input type="email" id="authEmail" placeholder="" class="w-full bg-white/5 border border-white/10 rounded-xl p-3 text-white text-xs outline-none focus:border-emerald-500/50 transition-all">
                </div>
            </div>

            <button onclick="startChatSession()" class="w-full py-4 rounded-xl premium-gradient text-[#050505] font-black text-[11px] uppercase tracking-[0.3em] shadow-[0_10px_30px_rgba(16,185,129,0.3)] hover:scale-[1.02] active:scale-95 transition-all">
                Mulai Konsultasi
            </button>
        </div>
    </div>
</div>
    </div>
</div>

<script>
    // Scroll visibility logic
    document.addEventListener('DOMContentLoaded', () => {
        const chatWidget = document.getElementById('chatWidget');
        const scrollThreshold = window.location.pathname === '/' ? 600 : 200;

        window.addEventListener('scroll', () => {
            if (window.scrollY > scrollThreshold) {
                chatWidget.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-10');
                chatWidget.classList.add('opacity-100', 'pointer-events-auto', 'translate-y-0');
            } else {
                chatWidget.classList.add('opacity-0', 'pointer-events-none', 'translate-y-10');
                chatWidget.classList.remove('opacity-100', 'pointer-events-auto', 'translate-y-0');
            }
        });
    });

    function toggleChat() {
        const btn = document.getElementById('chatButton');
        const tooltip = document.getElementById('chatTooltip');
        const chatIcon = document.getElementById('chatIcon');
        const closeIcon = document.getElementById('closeIcon');
        const chatMenu = document.getElementById('chatMenu');
        const nav = document.getElementById('mainNav'); // Navbar access
        
        btn.classList.toggle('active');
        
        if (btn.classList.contains('active')) {
            tooltip.style.opacity = '0';
            tooltip.style.transform = 'translate(-20px, 0) scale(0.9)';
            chatIcon.style.cssText = 'transform: rotate(180deg) scale(0); opacity: 0; transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);';
            closeIcon.style.cssText = 'transform: rotate(0deg) scale(1); opacity: 1; transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);';
            chatMenu.style.cssText = 'opacity: 1; transform: scale(1) translateY(0); pointer-events: auto;';
            if(nav) nav.style.transform = 'translateY(-120%)'; // Hide navbar
        } else {
            tooltip.style.opacity = '1';
            tooltip.style.transform = 'translate(0, 0) scale(1)';
            chatIcon.style.cssText = 'transform: rotate(0deg) scale(1); opacity: 1; transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);';
            closeIcon.style.cssText = 'transform: rotate(-180deg) scale(0); opacity: 0; transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);';
            chatMenu.style.cssText = 'opacity: 0; transform: scale(0.9) translateY(40px); pointer-events: none;';
            if(nav) nav.style.transform = 'translateY(0)'; // Show navbar
        }
    }

    let userName = '';

    function startChatSession() {
        const nameInput = document.getElementById('authName');
        const emailInput = document.getElementById('authEmail');
        const name = nameInput.value.trim();
        const email = emailInput.value.trim();

        if (!name || !email) {
            alert('Silakan masukkan nama dan email Anda.');
            return;
        }

        userName = name;
        document.getElementById('chatAuth').classList.add('hidden');
        document.getElementById('chatContent').classList.remove('hidden');

        // Initial Personalized Greeting
        const greeting = `Halo **${userName}**! 🙏 Selamat datang di Sanctuary Culture.`;
        processBotResponse(greeting);
    }

    function botReply(type) {
        const chatBody = document.getElementById('chatBody');
        const typing = document.getElementById('typingIndicator');
        const options = {
            'cek_stok': `Tentu, **${userName}**. Katalog premium kami mencakup **Channa Barca**, **Auranti**, **Maru**, dan **Pulchra**. Anda ingin melihat stok Grade (kasta) yang mana?`,
            'cek_ongkir': `Kami siap mengirim ke lokasi Anda dengan packing khusus. Ongkir akan otomatis muncul di halaman Checkout sesuai alamat yang Anda isi nanti.`,
            'konfirmasi': `Baik, silakan kirimkan bukti transfer Anda melalui tombol **Bicara dengan Admin** agar segera kami proses pengirimannya.`,
            'admin': 'Mohon tunggu sebentar, saya sedang menghubungkan Anda ke WhatsApp Admin spesialis penanganan Channa...'
        };

        const userMessages = {
            'cek_stok': '🐠 Cek Stok Ikan Terbaru',
            'cek_ongkir': '🚚 Cek Ongkos Kirim',
            'konfirmasi': '💳 Konfirmasi Pembayaran',
            'admin': 'Bicara dengan Admin'
        };

        // Add User Message
        addUserMessage(userMessages[type]);

        // Show Typing and Bot Reply
        processBotResponse(options[type], type === 'admin');
    }

    function handleSendMessage() {
        const input = document.getElementById('chatInput');
        const text = input.value.trim();
        if (!text) return;

        addUserMessage(text);
        input.value = '';

        // Simple Keyword Logic
        const lowerText = text.toLowerCase();
        let reply = "Mohon maaf, saya hanya menjawab pertanyaan mengenai website **Snakehead Culture** ini (stok ikan, harga, aksesoris, atau pengiriman). Silakan tanyakan hal tersebut ya, Kak **" + userName + "**!";

        if (lowerText.includes('barca')) reply = `Pilihan yang luar biasa, **${userName}**. **Channa Barca** kami tersedia dalam 4 kasta premium: Grade A+ (Rp 50jt), Grade A (Rp 20jt), Grade B (Rp 1jt), dan Bahan (Rp 600rb).`;
        else if (lowerText.includes('auranti')) reply = `**Channa Auranti** Grade A+ kami seharga Rp 3jt dengan warna oranye yang sangat solid. Grade A seharga Rp 1,5jt, Grade B Rp 800rb, dan Bahan Rp 450rb.`;
        else if (lowerText.includes('maru')) reply = `Untuk **Channa Maru** Yellow Sentarum, Grade A+ tersedia di Rp 2jt dengan bunga solid. Grade A seharga Rp 800rb, Grade B Rp 400rb, dan Bahan Rp 150rb.`;
        else if (lowerText.includes('pulchra')) reply = `**Channa Pulchra** Grade A+ kami seharga Rp 500rb (Rim tebal & biru pekat). Grade A seharga Rp 350rb, Grade B Rp 200rb, dan Bahan Rp 85rb.`;
        else if (lowerText.includes('pelet') || lowerText.includes('makan')) reply = `Untuk nutrisi maksimal, kami sedia **Max Growth Pellets** seharga Rp 150rb. Pelet ini khusus untuk menaikkan warna dan mempercepat pertumbuhan bunga.`;
        else if (lowerText.includes('ketapang')) reply = `Kami menyediakan **Premium Ketapang** olahan khusus seharga Rp 45rb untuk menjaga PH air dan kesehatan kulit Channa kesayangan Anda.`;
        else if (lowerText.includes('pasir')) reply = `Sedia **Pasir Malang Merah** seharga Rp 25rb untuk alas tank yang estetik sekaligus sebagai filter biologis alami.`;
        else if (lowerText.includes('lampu') || lowerText.includes('led')) reply = `**Pro LED Spot** (Rp 350rb) kami sangat direkomendasikan untuk menonjolkan warna (tanning) Channa secara maksimal di dalam tank.`;
        else if (lowerText.includes('stok') || lowerText.includes('produk') || lowerText.includes('ikan')) reply = "Koleksi kami mencakup kasta tertinggi (Grade A+, A, B, hingga Bahan) dari Barca, Auranti, Maru, hingga Pulchra. Kak bisa cek list lengkap di fitur **Catalogue Access** di atas.";
        else if (lowerText.includes('harga') || lowerText.includes('biaya')) reply = `Harga koleksi kami sangat transparan: mulai dari Rp 85rb (Pulchra Bahan) hingga Rp 50jt (Barca A+). Kak **${userName}** sedang mencari kasta (Grade) yang mana?`;
        else if (lowerText.includes('ongkir') || lowerText.includes('kirim')) reply = "Sistem pengiriman kami sudah terstandarisasi: Jateng Rp 10rb/kg, Luar Jateng (Pulau Jawa) Rp 15rb/kg, dan Luar Jawa Rp 25rb/kg. Packing dijamin aman sampai tujuan.";
        else if (lowerText.includes('admin') || lowerText.includes('tanya')) {
            reply = "Segera saya sambungkan ke WhatsApp Admin ya...";
            processBotResponse(reply, true);
            return;
        } else if (lowerText.includes('halo') || lowerText.includes('hi') || lowerText.includes('p') || lowerText.includes('siang') || lowerText.includes('malam') || lowerText.includes('pagi')) {
            reply = `Halo Kak **${userName}**! Ada yang bisa saya bantu terkait produk atau layanan di website ini?`;
        }

        processBotResponse(reply);
    }


    function addUserMessage(text) {
        const chatBody = document.getElementById('chatBody');
        const userMsg = document.createElement('div');
        userMsg.className = 'flex justify-end';
        userMsg.innerHTML = `<div class="bg-white/10 text-white p-3 rounded-2xl rounded-tr-none border border-white/10 max-w-[85%] text-[12px] leading-relaxed animate-in fade-in slide-in-from-right-2 underline-offset-4">${text}</div>`;
        chatBody.appendChild(userMsg);
        chatBody.scrollTop = chatBody.scrollHeight;
    }

    function processBotResponse(reply, isLink = false) {
        const chatBody = document.getElementById('chatBody');
        const typing = document.getElementById('typingIndicator');

        typing.classList.remove('hidden');
        chatBody.appendChild(typing);
        chatBody.scrollTop = chatBody.scrollHeight;

        setTimeout(() => {
            typing.classList.add('hidden');
            const botMsg = document.createElement('div');
            botMsg.className = 'flex items-start';
            botMsg.innerHTML = `<div class="glass border-emerald-500/10 text-emerald-50/90 p-4 rounded-3xl rounded-tl-none max-w-[90%] leading-relaxed shadow-sm text-[12px] animate-in fade-in slide-in-from-left-2">${reply}</div>`;
            chatBody.appendChild(botMsg);
            chatBody.scrollTop = chatBody.scrollHeight;

            if (isLink) {
                setTimeout(() => {
                    window.open('https://wa.me/6288271887763?text=Halo%20Admin,%20saya%20butuh%20bantuan%20terkait%20koleksi%20Culture', '_blank');
                }, 1000);
            }
        }, 800 + Math.random() * 1000);
    }

    // Enter Key Listener
    document.getElementById('chatInput').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') handleSendMessage();
    });
</script>
@endif
