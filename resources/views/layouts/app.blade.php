<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Snakehead Culture | Official Premium Predators')</title>
    <!-- Premium Typography -->
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --primary: #10b981;
            --primary-glow: rgba(16, 185, 129, 0.4);
            --bg: #050505;
        }
        body { 
            font-family: 'Inter', sans-serif; 
            background-color: var(--bg); 
            color: #ffffff;
            overflow-x: hidden;
        }
        h1, h2, h3, .font-syne { font-family: 'Syne', sans-serif; }
        
        .glass { 
            background: rgba(255, 255, 255, 0.03); 
            backdrop-filter: blur(20px); 
            border: 1px solid rgba(255, 255, 255, 0.08); 
        }
        
        .premium-gradient { 
            background: linear-gradient(135deg, #10b981 0%, #059669 100%); 
        }
        
        @yield('extra_css')
    </style>
</head>
<body class="antialiased">
    <!-- Navigation -->
    <nav id="mainNav" class="fixed w-full z-50 px-6 py-6 items-center flex justify-center transition-transform duration-500 ease-in-out">
        <div class="max-w-7xl w-full glass rounded-full px-8 py-4 flex justify-between items-center border-white/10">
            <div class="flex items-center space-x-3">
                <a href="{{ route('home') }}" class="flex items-center space-x-3">
                    <img src="{{ asset('images/logo.png') }}" class="h-10 w-10 object-contain" alt="Logo">
                    <span class="text-xl font-bold tracking-tighter uppercase font-syne italic">Snakehead <span class="text-emerald-500">Culture</span></span>
                </a>
            </div>
            <div class="hidden md:flex space-x-10 text-sm font-medium tracking-widest uppercase items-center">
                @include('partials.mega_menu')
                <a href="{{ route('home') }}" class="hover:text-emerald-400 transition-colors">Home</a>
                <a href="{{ route('store.info') }}" class="hover:text-emerald-400 transition-colors">Informasi</a>
            </div>
            <div class="flex items-center space-x-3 md:space-x-6">
                <!-- Cart -->
                <a href="{{ route('checkout.index') }}" class="relative group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:text-emerald-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    @if(session('cart'))
                        <span class="absolute -top-2 -right-2 bg-emerald-500 text-[10px] font-bold rounded-full h-5 w-5 flex items-center justify-center border-2 border-[#050505]">{{ count(session('cart')) }}</span>
                    @endif
                </a>
                
                @auth
                    <!-- Orders History Link -->
                    <a href="{{ route('profile.orders') }}" class="text-gray-300 hover:text-emerald-400 transition-colors hidden md:block" title="My Orders">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </a>
                @endauth

                @guest
                    <a href="{{ url('/login') }}" class="text-gray-300 hover:text-emerald-400 transition-colors" title="Login">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </a>
                @endguest
                
                @auth
                    @if(auth()->user()->role === 'admin')
                        <a href="{{ route('admin.dashboard') }}" class="text-emerald-400 hover:text-emerald-300 transition-colors hidden md:block" title="Dashboard">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </a>
                    @else
                        <form action="{{ route('logout') }}" method="POST" class="inline hidden md:block">
                            @csrf
                            <button type="submit" class="text-gray-400 hover:text-red-400 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                            </button>
                        </form>
                    @endif
                @endauth

                <!-- Hamburger Button -->
                <button id="mobileMenuBtn" class="md:hidden text-white focus:outline-none p-2 rounded-xl glass">
                    <svg id="hamburgerIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                    <svg id="closeIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Drawer -->
        <div id="mobileMenu" class="fixed inset-0 bg-[#050505]/95 backdrop-blur-xl z-[60] flex flex-col items-center justify-center space-y-8 text-2xl font-bold font-syne tracking-widest uppercase transition-all duration-500 opacity-0 pointer-events-none transform translate-x-full">
            <button id="closeMobileMenu" class="absolute top-10 right-10 text-emerald-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <a href="{{ route('home') }}" class="hover:text-emerald-400 transition-colors">Home</a>
            <a href="{{ route('species') }}" class="hover:text-emerald-400 transition-colors">Species</a>
            <a href="{{ route('gallery') }}" class="hover:text-emerald-400 transition-colors">Gallery</a>
            <a href="{{ route('store.info') }}" class="hover:text-emerald-400 transition-colors">Informasi</a>
            @auth
                <a href="{{ route('profile.orders') }}" class="hover:text-emerald-400 transition-colors">Pesanan Saya</a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-red-500 hover:text-red-400 transition-colors uppercase font-bold">Logout</button>
                </form>
            @endauth
        </div>
    </nav>

    <main class="pt-32">
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Smart Navbar Logic -->
    <script>
        (function() {
            const nav = document.getElementById('mainNav');
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const mobileMenu = document.getElementById('mobileMenu');
            const closeMobileMenu = document.getElementById('closeMobileMenu');
            let lastScrollY = window.scrollY;

            // Smart Navbar
            window.addEventListener('scroll', () => {
                if (window.scrollY > lastScrollY && window.scrollY > 100) {
                    nav.style.transform = 'translateY(-120%)';
                } else {
                    nav.style.transform = 'translateY(0)';
                }
                lastScrollY = window.scrollY;
            });

            // Mobile Menu Toggle
            function toggleMenu(show) {
                if(show) {
                    mobileMenu.classList.remove('opacity-0', 'pointer-events-none', 'translate-x-full');
                    mobileMenu.classList.add('opacity-100', 'pointer-events-auto', 'translate-x-0');
                    document.body.style.overflow = 'hidden';
                } else {
                    mobileMenu.classList.add('opacity-0', 'pointer-events-none', 'translate-x-full');
                    mobileMenu.classList.remove('opacity-100', 'pointer-events-auto', 'translate-x-0');
                    document.body.style.overflow = '';
                }
            }

            mobileMenuBtn.addEventListener('click', () => toggleMenu(true));
            closeMobileMenu.addEventListener('click', () => toggleMenu(false));

            // Close menu on link click
            mobileMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => toggleMenu(false));
            });
        })();
    </script>

    @yield('extra_js')
</body>
</html>
