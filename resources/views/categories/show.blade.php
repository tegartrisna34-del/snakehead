<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $category->name }} - Snakehead Culture</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body{background:#050505;color:#fff;font-family:Inter, sans-serif}
        .glass{background:rgba(255,255,255,0.03);backdrop-filter:blur(20px);border:1px solid rgba(255,255,255,0.08)}
        /* Scroll reveal base styles (direction-aware handled by JS) */
        .card-premium { opacity: 0; will-change: transform, opacity; transform: none; }
        .card-premium.revealed { opacity: 1; box-shadow: 0 20px 40px rgba(0,0,0,0.45); transition: transform .6s cubic-bezier(.2,.9,.2,1), opacity .6s ease, box-shadow .3s; }
    </style>
</head>
<body>
    <nav id="mainNav" class="fixed w-full z-50 px-6 py-6 items-center flex justify-center transition-transform duration-500 ease-in-out">
        <div class="max-w-7xl w-full glass rounded-full px-8 py-4 flex justify-between items-center border-white/10">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logo.png') }}" class="h-10 w-10 object-contain" alt="Logo">
                <span class="text-xl font-bold tracking-tighter uppercase">Snakehead <span class="text-emerald-500">Culture</span></span>
            </div>
            <div class="hidden md:flex space-x-10 text-sm font-medium tracking-widest uppercase items-center">
                @include('partials.mega_menu')
                <a href="/" class="hover:text-emerald-400 transition-colors">Home</a>
            </div>
            <div class="flex items-center space-x-6">
                @guest
                    <a href="{{ url('/login') }}" class="text-gray-300 hover:text-emerald-400 transition-colors" title="Login">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </a>
                @endguest
                @auth
                    <a href="{{ route('admin.dashboard') }}" class="text-emerald-400 hover:text-emerald-300 transition-colors" title="Dashboard">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </a>
                @endauth
                <a href="{{ route('checkout.index') }}" class="relative group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-emerald-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    @if(session('cart'))
                        <span class="absolute -top-2 -right-2 bg-emerald-500 text-[10px] font-bold rounded-full h-5 w-5 flex items-center justify-center border-2 border-[#050505]">{{ count(session('cart')) }}</span>
                    @endif
                </a>
            </div>
        </div>
    </nav>

    <main class="pt-28 pb-28">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <h1 class="text-4xl font-bold mb-4">{{ $category->name }}</h1>
            <p class="text-gray-400 mb-8">Daftar produk kategori {{ $category->name }}.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @forelse($products as $product)
                    <div class="card-premium rounded-[2rem] overflow-hidden group">
                        <div class="relative h-64 overflow-hidden">
                            <img src="{{ $product->image ? asset($product->image) : 'https://via.placeholder.com/800x600' }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold">{{ $product->name }}</h3>
                            <div class="flex justify-between items-center mt-2">
                                <div class="text-emerald-500 font-bold">Rp {{ number_format($product->price,0,',','.') }}</div>
                                <span class="px-2 py-1 rounded text-xs font-bold {{ $product->stock > 5 ? 'bg-emerald-500/20 text-emerald-400' : ($product->stock > 0 ? 'bg-yellow-500/20 text-yellow-400' : 'bg-red-500/20 text-red-400') }}">
                                    {{ $product->stock ?? 0 }} Ekor
                                </span>
                            </div>
                            <p class="text-gray-400 mt-2 line-clamp-3">{{ $product->description }}</p>
                            <div class="mt-4">
                                <a href="{{ route('product.show', $product->slug) }}" class="px-4 py-2 bg-emerald-500 rounded text-black font-bold">Lihat</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-20">
                        <p class="text-gray-400">Belum ada produk pada kategori ini.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </main>

</body>
</html>

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

        console.log('Category page reveal initialized, initial scrollDirection=', scrollDirection);

        const io = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                    const el = entry.target;
                    console.log('Revealing category element', el, 'direction=', scrollDirection);
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
