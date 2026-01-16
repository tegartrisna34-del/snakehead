<div class="mega-container relative">
    <button type="button" class="mega-toggle uppercase font-bold tracking-widest text-sm px-4 py-2 hover:text-emerald-400 transition-all flex items-center gap-2" aria-expanded="false">
        Shop
        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 opacity-50 group-hover:opacity-100 transition-opacity" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <div class="mega-menu hidden absolute left-0 mt-3 w-64 z-50">
        <div class="bg-[#0a0a0a]/95 glass border border-white/10 rounded-2xl shadow-2xl overflow-visible py-3 relative">
            @php
                // Fetch and simplify names
                $allProducts = \App\Models\Product::where('is_active', true)->where('stock', '>', 0)->get();
                $simplified = $allProducts->map(function($p) {
                    $baseName = preg_replace('/ (Grade [A-B\+]+\.?|Bahan).*$/i', '', $p->name);
                    return (object)[
                        'name' => trim($baseName), 
                        'slug' => $p->category->slug ?? Str::slug($baseName)
                    ];
                })->unique('name')->sortBy('name');

                // Split as requested
                $mainSpecies = $simplified->filter(fn($p) => str_contains(strtolower($p->name), 'channa'))->take(4);
                $otherProducts = $simplified->reject(fn($p) => $mainSpecies->contains($p));
            @endphp

            {{-- Main List (Channa Only) --}}
            @foreach($mainSpecies as $sp)
                <a href="{{ route('home') }}#{{ $sp->slug }}" class="block px-6 py-3.5 text-gray-400 hover:text-emerald-400 hover:bg-emerald-500/5 transition-all text-[11px] font-bold uppercase tracking-wider border-l-2 border-transparent hover:border-emerald-500/50">
                    {{ $sp->name }}
                </a>
            @endforeach

            {{-- See All Products with Flyout --}}
            <div class="border-t border-white/5 mt-2 pt-2 group/submenu relative">
                <div class="px-6 py-4 text-emerald-500 group-hover/submenu:bg-emerald-500/5 transition-all text-[10px] font-black uppercase tracking-[0.2em] flex items-center justify-between cursor-pointer">
                    <span>See all products</span>
                    <svg class="w-3 h-3 group-hover/submenu:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"/></svg>
                </div>

                {{-- Flyout Side Menu --}}
                <div class="invisible group-hover/submenu:visible opacity-0 group-hover/submenu:opacity-100 absolute left-full top-[-10px] ml-1 w-64 transition-all duration-300 transform translate-x-2 group-hover/submenu:translate-x-0">
                    <div class="bg-[#0a0a0a]/95 glass border border-white/10 rounded-2xl shadow-2xl overflow-hidden py-3">
                        @foreach($otherProducts as $op)
                            <a href="{{ route('home') }}#{{ $op->slug }}" class="block px-6 py-3 text-gray-400 hover:text-emerald-400 hover:bg-emerald-500/5 transition-all text-[11px] font-bold uppercase tracking-wider border-l-2 border-transparent hover:border-emerald-500/50">
                                {{ $op->name }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.mega-container').forEach(function (container) {
                var btn = container.querySelector('.mega-toggle');
                var menu = container.querySelector('.mega-menu');
                var timeout;

                if (!btn || !menu) return;

                function showMenu() {
                    clearTimeout(timeout);
                    document.querySelectorAll('.mega-menu').forEach(function(m){ m.classList.add('hidden'); });
                    menu.classList.remove('hidden');
                    btn.setAttribute('aria-expanded','true');
                }

                function hideMenu() {
                    timeout = setTimeout(function() {
                        menu.classList.add('hidden');
                        btn.setAttribute('aria-expanded','false');
                    }, 100); // Small delay to prevent accidental closing
                }

                container.addEventListener('mouseenter', showMenu);
                container.addEventListener('mouseleave', hideMenu);

                // Auto-close on link click
                menu.querySelectorAll('a').forEach(function(link) {
                    link.addEventListener('click', function() {
                        menu.classList.add('hidden');
                        btn.setAttribute('aria-expanded','false');
                    });
                });
            });
        });
    </script>
</div>
