@extends('layouts.app')

@php $renderedAnchors = []; @endphp

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
            <img src="{{ asset('images/blue-channa-hero.png') }}" class="w-full h-full object-cover object-right animate-float" alt="Premium Channa">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#050505] via-[#050505]/80 to-transparent"></div>
        
        <div class="relative max-w-7xl mx-auto px-6 lg:px-8 w-full">
            <div class="max-w-2xl">
                <span class="inline-block px-4 py-1 rounded-full border border-emerald-500/30 bg-emerald-500/10 text-emerald-400 text-xs font-bold tracking-widest uppercase mb-6">Established 2020</span>
                <h1 class="text-5xl md:text-7xl font-extrabold leading-[0.9] tracking-tighter font-syne uppercase">
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
                        Information
                    </a>

                </div>
            </div>
        </div>
    </section>

    <!-- Featured Section -->
    <section id="products" class="pt-32 pb-8 relative">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-20">
                <div class="max-w-xl">
                    <h2 class="text-5xl font-bold font-syne tracking-tight">The <span class="text-emerald-500 italic">Signature</span> Gallery</h2>
                    <p class="text-gray-500 mt-4 text-lg">Hand-picked specimens, genetically superior, and meticulously acclimated.</p>
                </div>
                </div>
            </div>

            <div class="w-full">
            @foreach($speciesCategories as $specCat)
            @if($specCat->products->count() > 0)
            <div class="mb-12 scroll-mt-24" id="{{ Str::slug($specCat->name) }}">
                <div class="flex items-center space-x-4 mb-10">
                    <h3 class="text-3xl font-bold font-syne tracking-tight">{{ $specCat->name }}</h3>
                    <div class="h-px flex-1 bg-gradient-to-r from-emerald-500/50 to-transparent"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-5 px-4 md:px-0">
                    @foreach($specCat->products as $product)
                    <div class="card-premium rounded-[1.5rem] overflow-hidden group flex flex-col">
                        <div class="relative h-[200px] overflow-hidden">
                            <img src="{{ $product->image ? asset($product->image) : 'https://images.unsplash.com/photo-1522061342075-2972171634ad?q=80&w=2069&auto=format&fit=crop' }}" 
                                 alt="{{ $product->name }}" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#050505] via-transparent to-transparent opacity-60"></div>
                            <div class="absolute top-3 left-3">
                                <span class="px-2 py-0.5 glass rounded-full text-[7px] font-bold uppercase tracking-widest text-emerald-400">
                                    {{ $specCat->name }}
                                </span>
                            </div>
                        </div>
                        <div class="p-5 flex flex-col flex-1">
                            <div class="flex flex-col mb-2">
                                <h3 class="text-lg font-bold font-syne leading-tight truncate">{{ $product->name }}</h3>
                                <div class="flex justify-between items-center mt-1">
                                    <p class="text-gray-500 text-[9px]">Authentic Grade</p>
                                    <span class="text-emerald-500 font-bold font-syne text-base">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                                </div>
                            </div>
                            <div class="mb-3 flex items-center justify-between">
                                <span class="text-[9px] font-bold uppercase tracking-widest text-gray-400">Stock</span>
                                <span class="px-2 py-0.5 rounded-full text-[9px] font-bold {{ $product->stock > 5 ? 'bg-emerald-500/20 text-emerald-400' : ($product->stock > 0 ? 'bg-yellow-500/20 text-yellow-400' : 'bg-red-500/20 text-red-400') }}">
                                    {{ $product->stock ?? 0 }} Units
                                </span>
                            </div>
                            <p class="text-gray-400 text-[10px] line-clamp-2 font-light leading-relaxed mb-4">
                                {{ $product->description }}
                            </p>
                            <div class="mt-auto w-full">
                                <div class="flex items-center gap-2 w-full">
                                    <a href="{{ route('product.show', $product->slug) }}" class="flex-1 inline-block text-center py-2.5 glass rounded-xl hover:bg-white/10 transition-all duration-300 font-bold uppercase text-[9px] tracking-widest text-white">
                                        VIEW PRODUCT
                                    </a>
                                    <form action="{{ route('cart.add', $product->id) }}" method="POST" class="flex-none">
                                        @csrf
                                        <button type="submit" class="w-9 h-9 glass rounded-xl flex items-center justify-center hover:bg-emerald-500 hover:text-white transition-all border border-emerald-500/50 group-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-emerald-500 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                            </svg>
                                        </button>
                                    </form>
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

    <!-- Promo Section -->
    <section class="py-12 bg-black relative overflow-hidden">
        <div class="absolute inset-0 opacity-40">
            <img src="https://images.unsplash.com/photo-1544551763-77ef2d0cfc6c?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover opacity-30" alt="Background">
            <div class="absolute inset-0 bg-gradient-to-r from-black via-black/80 to-transparent"></div>
        </div>
        
        <div class="max-w-5xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="flex flex-col md:flex-row items-center justify-center gap-10">
                <div class="relative max-w-sm flex-shrink-0">
                     <!-- Circular Glow -->
                     <div class="absolute -inset-10 bg-emerald-500/10 blur-3xl rounded-full"></div>
                     <img src="{{ asset('images/promo-channa.png') }}" class="relative w-full rounded-2xl shadow-2xl transform hover:scale-105 transition-transform duration-700" alt="Exquisite Channa">
                </div>
                
                <div class="text-left">
                    <h2 class="text-4xl md:text-5xl font-black font-syne uppercase leading-[0.9] tracking-tighter mb-4">
                        <span class="text-emerald-500">SNAKEHEAD</span><br>
                        <span class="text-white">CULTURE</span>
                    </h2>
                    
                    <p class="text-gray-400 text-sm md:text-base leading-relaxed mb-6 max-w-md font-light">
                        Curating the finest Channa specimens. From ethically sourced rivers to your premium tank.
                    </p>
                    
                    <a href="{{ route('gallery') }}" class="inline-flex items-center justify-center bg-emerald-500 text-black font-bold uppercase tracking-widest px-8 py-3 text-xs rounded-full hover:bg-emerald-400 hover:scale-105 transition-all duration-300 shadow-[0_0_20px_rgba(16,185,129,0.3)]">
                        <span>Explore Gallery</span>
                    </a>
                </div>
            </div>
        </div>
    </section>



    <!-- Essential Care Section (New Slider) - Relocated -->
    <section id="supplies" class="py-16 relative border-t border-b border-white/5 bg-[#080808] scroll-mt-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-end mb-10">
                <div>
                    <h2 class="text-3xl font-bold font-syne tracking-tight">Essential <span class="text-emerald-500 italic">Care</span></h2>
                    <p class="text-gray-500 mt-2 text-sm">Premium supplies for your predator's health.</p>
                </div>
                
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
                                <span class="text-[10px] text-gray-500 font-medium">{{ $supply->stock }} {{ $supply->unit ?? 'Units' }}</span>
                            </div>
                            
                            <p class="text-[11px] text-gray-500 line-clamp-2 leading-relaxed mb-4">
                                {{ $supply->description }}
                            </p>
                        </div>

                        <div class="flex items-center gap-2">
                            <a href="{{ route('product.show', $supply->slug) }}" class="flex-1 py-3 text-center glass rounded-xl text-[10px] font-bold uppercase tracking-widest hover:bg-white/10 transition-colors">
                                VIEW PRODUCT
                            </a>
                            <form action="{{ route('cart.add', $supply->id) }}" method="POST" class="flex-none">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $supply->id }}">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" class="w-10 h-10 glass hover:bg-emerald-500 hover:text-white text-emerald-500 rounded-xl flex items-center justify-center transition-all border border-emerald-500/50 group">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            
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
