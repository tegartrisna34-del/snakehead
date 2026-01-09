@extends('layouts.app')

@section('title', 'Snakehead Culture | Official Premium Predators')

@section('extra_css')
<style>
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
@endsection

@section('content')
    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center relative -mt-32 overflow-hidden">
        <div class="absolute right-0 top-0 w-2/3 h-full hero-mask opacity-60">
            <img src="{{ asset('images/hero.png') }}" class="w-full h-full object-cover object-right animate-float" alt="Premium Channa">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#050505] via-[#050505]/80 to-transparent"></div>
        
        <div class="relative max-w-7xl mx-auto px-6 lg:px-8 w-full">
            <div class="max-w-2xl">
                <span class="inline-block px-4 py-1 rounded-full border border-emerald-500/30 bg-emerald-500/10 text-emerald-400 text-xs font-bold tracking-widest uppercase mb-6">Established 2020</span>
                <h1 class="text-7xl md:text-9xl font-extrabold leading-[0.9] tracking-tighter font-syne uppercase">
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

            <div class="w-full">
            @foreach($speciesCategories as $specCat)
            @if($specCat->products->count() > 0)
            <div class="mb-24">
                <div class="flex items-center space-x-4 mb-10">
                    <h3 class="text-3xl font-bold font-syne tracking-tight">{{ $specCat->name }}</h3>
                    <div class="h-px flex-1 bg-gradient-to-r from-emerald-500/50 to-transparent"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-10 px-4 md:px-0">
                    @foreach($specCat->products as $product)
                    <div class="card-premium rounded-[2rem] overflow-hidden group flex flex-col">
                        <div class="relative h-[300px] overflow-hidden">
                            <img src="{{ $product->image ? asset($product->image) : 'https://images.unsplash.com/photo-1522061342075-2972171634ad?q=80&w=2069&auto=format&fit=crop' }}" 
                                 alt="{{ $product->name }}" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#050505] via-transparent to-transparent opacity-60"></div>
                            <div class="absolute top-6 left-6">
                                <span class="px-3 py-1 glass rounded-full text-[10px] font-bold uppercase tracking-widest text-emerald-400">
                                    {{ $specCat->name }}
                                </span>
                            </div>
                        </div>
                        <div class="p-8 flex flex-col flex-1">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-2xl font-bold font-syne">{{ $product->name }}</h3>
                                    <p class="text-gray-500 text-sm mt-1">Authentic Grade specimen</p>
                                </div>
                                <span class="text-emerald-500 font-bold font-syne text-xl">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                            </div>
                            <div class="mb-3 flex items-center justify-between">
                                <span class="text-xs font-bold uppercase tracking-widest">Stok</span>
                                <span class="px-3 py-1 rounded-full text-xs font-bold {{ $product->stock > 5 ? 'bg-emerald-500/20 text-emerald-400' : ($product->stock > 0 ? 'bg-yellow-500/20 text-yellow-400' : 'bg-red-500/20 text-red-400') }}">
                                    {{ $product->stock ?? 0 }} Ekor
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
                    @endforeach
                </div>
            </div>
            @endif
            @endforeach

            @if($speciesCategories->sum(fn($c) => $c->products->count()) == 0)
            <div class="col-span-full py-32 text-center glass rounded-[3rem] border-dashed border-white/10">
                <div class="w-20 h-20 bg-emerald-500/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0a2 2 0 01-2 2H6a2 2 0 01-2-2m16 0l-8 4-8-4" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold font-syne">Warehouse empty.</h3>
                <p class="text-gray-500 mt-2">Our latest shipment is arriving soon.</p>
            </div>
            @endif
            </div>
        </div>
    </section>



    <!-- Essential Care Section (New Slider) - Relocated -->
    <section class="py-16 relative border-t border-b border-white/5 bg-[#080808]">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-end mb-10">
                <div>
                    <h2 class="text-3xl font-bold font-syne tracking-tight">Essential <span class="text-emerald-500 italic">Care</span></h2>
                    <p class="text-gray-500 mt-2 text-sm">Premium supplies for your predator's health.</p>
                </div>
                
                <!-- Scroll Controls -->
                <div class="flex space-x-2">
                    <button id="scrollLeft" class="w-10 h-10 rounded-full border border-white/10 hover:border-emerald-500/50 hover:bg-emerald-500/10 flex items-center justify-center transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7" /></svg>
                    </button>
                    <button id="scrollRight" class="w-10 h-10 rounded-full border border-white/10 hover:border-emerald-500/50 hover:bg-emerald-500/10 flex items-center justify-center transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7" /></svg>
                    </button>
                </div>
            </div>

            <!-- Horizontal Slider Container -->
            <div id="essentialsSlider" class="flex overflow-x-auto space-x-6 pb-8 snap-x scroll-smooth hide-scrollbar" style="scrollbar-width: none; -ms-overflow-style: none;">
                @foreach($supplies as $supply)
                <div class="snap-start flex-none w-[260px] h-full">
                    <div class="card-premium rounded-3xl p-4 flex flex-col group hover:bg-white/5 border border-white/5 transition-all duration-300">
                        <div class="relative h-44 rounded-2xl overflow-hidden mb-4">
                            <img src="{{ asset($supply->image) }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="{{ $supply->name }}">
                            <div class="absolute top-3 left-3">
                                <span class="px-2 py-1 glass rounded-lg text-[8px] font-bold uppercase tracking-widest text-emerald-400">
                                    {{ $supply->category->name }}
                                </span>
                            </div>
                        </div>
                        
                        <div class="flex-1">
                            <h3 class="text-lg font-bold font-syne mb-1 truncate">{{ $supply->name }}</h3>
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-emerald-500 font-bold text-sm">Rp {{ number_format($supply->price, 0, ',', '.') }}</span>
                                <span class="text-[10px] text-gray-500 font-medium">{{ $supply->stock }} {{ $supply->unit ?? 'Ekor' }}</span>
                            </div>
                            
                            <p class="text-[11px] text-gray-500 line-clamp-2 leading-relaxed mb-4">
                                {{ $supply->description }}
                            </p>
                        </div>

                        <div class="flex items-center gap-2">
                            <a href="{{ route('product.show', $supply->slug) }}" class="flex-1 py-3 text-center glass rounded-xl text-[10px] font-bold uppercase tracking-widest hover:bg-white/10 transition-colors">
                                Detail
                            </a>
                            <form action="{{ route('cart.add', $supply->id) }}" method="POST" class="flex-none">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $supply->id }}">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" class="w-10 h-10 bg-emerald-500 hover:bg-emerald-400 text-black rounded-xl flex items-center justify-center transition-all shadow-lg hover:shadow-emerald-500/20">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <script>
                document.getElementById('scrollLeft').addEventListener('click', () => {
                    document.getElementById('essentialsSlider').scrollBy({ left: -300, behavior: 'smooth' });
                });
                document.getElementById('scrollRight').addEventListener('click', () => {
                    document.getElementById('essentialsSlider').scrollBy({ left: 300, behavior: 'smooth' });
                });
            </script>
            
        </div>
    </section>
@endsection

@section('extra_js')
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

            const io = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const el = entry.target;
                        el.style.transition = 'none';
                        el.style.opacity = '0';
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
@endsection
