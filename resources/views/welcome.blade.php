<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Snakehead Culture | Official Premium Predators</title>
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
        
        .text-glow {
            text-shadow: 0 0 20px var(--primary-glow);
        }
        
        .card-premium {
            background: linear-gradient(180deg, rgba(255,255,255,0.05) 0%, rgba(255,255,255,0) 100%);
            border: 1px solid rgba(255,255,255,0.1);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-premium:hover {
            transform: translateY(-10px) scale(1.02);
            border-color: var(--primary);
            box-shadow: 0 20px 40px -10px rgba(16, 185, 129, 0.2);
        }

        .hero-mask {
            mask-image: linear-gradient(to bottom, black 60%, transparent 100%);
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        .animate-float { animation: float 6s ease-in-out infinite; }

        /* Scroll reveal base styles (direction-aware handled by JS) */
        .card-premium { opacity: 0; will-change: transform, opacity; transform: none; }
        .card-premium.revealed { opacity: 1; box-shadow: 0 20px 40px rgba(0,0,0,0.45); transition: transform .6s cubic-bezier(.2,.9,.2,1), opacity .6s ease, box-shadow .3s; }

        /* Hero action hover highlight (only hovered item becomes highlighted) */
        .hero-actions a { transition: all .22s ease; }
        .hero-actions a.default-about { font-size: .875rem; font-weight: 700; letter-spacing: .15em; text-transform: uppercase; padding: .5rem 1.5rem; border-bottom: 2px solid rgba(16,185,129,0.25); }
        .hero-actions a.action-info { border-radius: 9999px; }
        .hero-actions a.is-active {
            box-shadow: 0 0 30px var(--primary-glow);
            transform: translateY(-3px);
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: #fff !important;
            padding: .9rem 2.5rem;
            border-radius: 9999px;
            border-color: transparent;
        }
    </style>
</head>
<body class="antialiased">
    <!-- Navigation -->
    <nav class="fixed w-full z-50 px-6 py-6 items-center flex justify-center">
        <div class="max-w-7xl w-full glass rounded-full px-8 py-4 flex justify-between items-center border-white/10">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logo.png') }}" class="h-10 w-10 object-contain" alt="Logo">
                <span class="text-xl font-bold tracking-tighter uppercase font-syne italic">Snakehead <span class="text-emerald-500">Culture</span></span>
            </div>
            <div class="hidden md:flex space-x-10 text-sm font-medium tracking-widest uppercase items-center">
                @include('partials.mega_menu')
                <a href="#home" class="hover:text-emerald-400 transition-colors">Home</a>
                <a href="{{ route('store.info') }}" class="hover:text-emerald-400 transition-colors">Informasi</a>
            </div>
            <div class="flex items-center space-x-6">
                <a href="{{ route('checkout.index') }}" class="relative group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:text-emerald-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    @if(session('cart'))
                        <span class="absolute -top-2 -right-2 bg-emerald-500 text-[10px] font-bold rounded-full h-5 w-5 flex items-center justify-center border-2 border-[#050505]">{{ count(session('cart')) }}</span>
                    @endif
                </a>
                <a href="{{ route('contact') }}" class="hidden md:inline-block text-sm text-emerald-400 hover:underline">Contact</a>
                <a href="https://wa.me/6282136048824" target="_blank" class="ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-400" fill="currentColor" viewBox="0 0 24 24"><path d="M20.52 3.48A11.9 11.9 0 0012 .1 11.88 11.88 0 001.28 9.86c0 2.11.55 4.16 1.6 5.99L0 24l8.41-2.2a11.88 11.88 0 004.59.95h.01c6.55 0 11.98-5.36 11.98-11.98 0-3.2-1.25-6.2-3.87-8.29zM12 21.5c-1.28 0-2.53-.34-3.61-.98l-.26-.15-5.01 1.31 1.32-4.9-.17-.29A9.18 9.18 0 012.8 9.88c0-5.01 4.07-9.08 9.08-9.08 2.42 0 4.69.94 6.4 2.66 1.7 1.7 2.64 3.98 2.64 6.42 0 5.01-4.07 9.08-9.08 9.08z"/></svg>
                </a>
                <button class="md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center relative pt-20 overflow-hidden">
        <div class="absolute right-0 top-0 w-2/3 h-full hero-mask opacity-60">
            <img src="{{ asset('images/hero.png') }}" class="w-full h-full object-cover object-right animate-float" alt="Premium Channa">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#050505] via-[#050505]/80 to-transparent"></div>
        
        <div class="relative max-w-7xl mx-auto px-6 lg:px-8 w-full">
            <div class="max-w-2xl">
                <span class="inline-block px-4 py-1 rounded-full border border-emerald-500/30 bg-emerald-500/10 text-emerald-400 text-xs font-bold tracking-widest uppercase mb-6">Established 2020</span>
                <h1 class="text-7xl md:text-9xl font-extrabold leading-[0.9] tracking-tighter font-syne">
                    ELITE <br><span class="text-emerald-500 text-glow">PREDATORS</span>
                </h1>
                <p class="mt-8 text-lg text-gray-400 leading-relaxed max-w-lg font-light">
                    Elevating the standard of aquatic excellence. We bring you the rarest and most vibrant Channa species from across the globe, curated for the true enthusiast.
                </p>
                <div class="mt-12 flex items-center space-x-8 flex-wrap gap-4 hero-actions">
                    <a href="#products" class="action-collection action-about-like default-about">
                        View Collection
                    </a>
                    <a href="{{ route('store.info') }}" class="action-info default-about">
                        Informasi
                    </a>
                    <a href="#about" class="action-about default-about">
                        About
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Section -->
    <section id="products" class="py-32 relative">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-20">
                <div class="max-w-xl">
                    <h2 class="text-5xl font-bold font-syne tracking-tight">The <span class="text-emerald-500 italic">Signature</span> Gallery</h2>
                    <p class="text-gray-500 mt-4 text-lg">Hand-picked specimens, genetically superior, and meticulously acclimated.</p>
                </div>
                <div class="mt-8 md:mt-0">
                    <div class="flex space-x-4">
                        <button class="p-4 rounded-full border border-white/10 hover:border-emerald-500/50 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7" /></svg>
                        </button>
                        <button class="p-4 rounded-full border border-white/10 hover:border-emerald-500/50 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7" /></svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @forelse($products as $product)
                <div class="card-premium rounded-[2rem] overflow-hidden group flex flex-col">
                    <div class="relative h-[400px] overflow-hidden">
                        <img src="{{ $product->image ? asset($product->image) : 'https://images.unsplash.com/photo-1522061342075-2972171634ad?q=80&w=2069&auto=format&fit=crop' }}" 
                             alt="{{ $product->name }}" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#050505] via-transparent to-transparent opacity-60"></div>
                        <div class="absolute top-6 left-6">
                            <span class="px-3 py-1 glass rounded-full text-[10px] font-bold uppercase tracking-widest text-emerald-400">
                                {{ $product->category->name ?? 'Premium' }}
                            </span>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-1">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-2xl font-bold font-syne">{{ $product->name }}</h3>
                                <p class="text-gray-500 text-sm mt-1">Authentic Grade A+ Breed</p>
                            </div>
                            <span class="text-emerald-500 font-bold font-syne text-xl">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        </div>
                        <div class="mb-3 flex items-center justify-between">
                            <span class="text-xs font-bold uppercase tracking-widest">Stok</span>
                            <span class="px-3 py-1 rounded-full text-xs font-bold {{ $product->stock > 5 ? 'bg-emerald-500/20 text-emerald-400' : ($product->stock > 0 ? 'bg-yellow-500/20 text-yellow-400' : 'bg-red-500/20 text-red-400') }}">
                                {{ $product->stock ?? 0 }} Unit
                            </span>
                        </div>
                        <p class="text-gray-400 text-sm line-clamp-2 font-light leading-relaxed">
                            {{ $product->description }}
                        </p>
                        <div class="mt-8 mt-auto w-full">
                            <div class="flex flex-col items-center gap-3">
                                <a href="{{ route('product.show', $product->slug) }}" class="w-full inline-block text-center py-4 glass rounded-2xl hover:bg-emerald-500 hover:text-white transition-all duration-300 font-bold uppercase text-xs tracking-widest">
                                    Lihat Produk
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full py-32 text-center glass rounded-[3rem] border-dashed border-white/10">
                    <div class="w-20 h-20 bg-emerald-500/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0a2 2 0 01-2 2H6a2 2 0 01-2-2m16 0l-8 4-8-4" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold font-syne">Warehouse empty.</h3>
                    <p class="text-gray-500 mt-2">Our latest shipment is arriving soon.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    @include('partials.footer')

    @if(session('success'))
    <div class="fixed bottom-10 right-10 z-[100]">
        <div class="glass px-8 py-4 rounded-2xl border-emerald-500/50 flex items-center space-x-4 shadow-2xl animate-fade-in-up">
            <div class="bg-emerald-500 p-2 rounded-full text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
            </div>
            <span class="text-sm font-bold tracking-tight">{{ session('success') }}</span>
        </div>
    </div>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const items = document.querySelectorAll('.card-premium');
            if (!('IntersectionObserver' in window) || items.length === 0) {
                items.forEach(i => i.classList.add('revealed'));
                return;
            }

            let lastScrollY = window.pageYOffset || document.documentElement.scrollTop;
            let scrollDirection = 'down';
            window.addEventListener('scroll', function () {
                const y = window.pageYOffset || document.documentElement.scrollTop;
                scrollDirection = (y > lastScrollY) ? 'down' : 'up';
                lastScrollY = (y <= 0) ? 0 : y;
            }, { passive: true });

            console.log('Scroll-reveal initialized, initial scrollDirection=', scrollDirection);

            const io = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const el = entry.target;
                        console.log('Revealing element', el, 'direction=', scrollDirection);
                        // set starting position depending on scroll direction
                        el.style.transition = 'none';
                        el.style.opacity = '0';
                        // when scrolling down, reveal should come from below (start +Y)
                        el.style.transform = (scrollDirection === 'down') ? 'translateY(24px)' : 'translateY(-24px)';

                        requestAnimationFrame(() => {
                            el.classList.add('revealed');
                            el.style.transform = 'translateY(0)';
                            el.style.opacity = '1';
                        });

                        io.unobserve(el);
                    }
                });
            }, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' });

            items.forEach(i => io.observe(i));
        });
    </script>
    <script>
        // Hero actions: highlight only the hovered/focused item
        (function () {
            const actions = document.querySelectorAll('.hero-actions a');
            if (!actions.length) return;

            function clearActive() {
                actions.forEach(x => x.classList.remove('is-active'));
            }

            actions.forEach(a => {
                a.addEventListener('mouseenter', () => {
                    clearActive();
                    a.classList.add('is-active');
                });
                a.addEventListener('mouseleave', () => {
                    a.classList.remove('is-active');
                });
                a.addEventListener('focus', () => {
                    clearActive();
                    a.classList.add('is-active');
                });
                a.addEventListener('blur', () => {
                    a.classList.remove('is-active');
                });
            });
        })();
    </script>
</body>
</html>
