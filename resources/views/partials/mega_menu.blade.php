<div class="relative mega-container">
    <button type="button" class="mega-toggle uppercase font-bold tracking-widest text-sm px-4 py-2 hover:text-emerald-400 transition-colors" aria-expanded="false">Shop</button>

    <div class="mega-menu hidden absolute left-0 right-0 mt-3 z-50">
        <div class="max-w-7xl mx-auto px-8 bg-black/90 glass border border-white/5 rounded-xl shadow-2xl p-8">
            <div class="grid grid-cols-1 md:grid-cols-6 gap-8">
                @php
                    $menuOrder = [
                        ['slug' => 'chana', 'label' => 'Chana'],
                        ['slug' => 'aquarium', 'label' => 'Aquarium & Aksesoris'],
                        ['slug' => 'pakan', 'label' => 'Pakan'],
                        ['slug' => 'obat', 'label' => 'Obat'],
                    ];
                @endphp
                @foreach($menuOrder as $item)
                    @php $cat = $categories->firstWhere('slug', $item['slug']); @endphp
                    <div class="md:col-span-1">
                        <a href="{{ route('category.show', $cat? $cat->slug : $item['slug']) }}" class="text-emerald-400 font-bold uppercase text-sm mb-4 inline-block">{{ $item['label'] }}</a>
                        <div class="mt-3">
                            <a href="{{ route('category.show', $cat? $cat->slug : $item['slug']) }}" class="text-emerald-400 text-xs font-bold uppercase">Lihat semua</a>
                        </div>
                    </div>
                @endforeach

                <div class="md:col-span-2 hidden lg:block">
                    <h4 class="text-emerald-400 font-bold uppercase text-sm mb-4">Highlights</h4>
                    <div class="grid grid-cols-1 gap-4">
                        @php
                            $featured = \App\Models\Product::where('is_active', true)->inRandomOrder()->take(4)->get();
                        @endphp
                        @foreach($featured as $f)
                            <a href="{{ route('product.show', $f->slug ?? $f->id) }}" class="flex items-center gap-4 bg-white/3 p-3 rounded">
                                <img src="{{ $f->image ? asset($f->image) : 'https://via.placeholder.com/56' }}" class="w-14 h-14 object-cover rounded" alt="{{ $f->name }}">
                                <div>
                                    <div class="font-bold">{{ $f->name }}</div>
                                    <div class="text-xs text-gray-300">Rp {{ number_format($f->price,0,',','.') }}</div>
                                </div>
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

                if (!btn || !menu) return;

                btn.addEventListener('click', function (e) {
                    e.stopPropagation();
                    var open = !menu.classList.contains('hidden');
                    // close all other mega menus
                    document.querySelectorAll('.mega-menu').forEach(function(m){ m.classList.add('hidden'); });
                    if (open) {
                        menu.classList.add('hidden');
                        btn.setAttribute('aria-expanded','false');
                    } else {
                        menu.classList.remove('hidden');
                        btn.setAttribute('aria-expanded','true');
                    }
                });

                // close when clicking outside
                document.addEventListener('click', function (ev) {
                    if (!container.contains(ev.target)) {
                        menu.classList.add('hidden');
                        btn.setAttribute('aria-expanded','false');
                    }
                });
            });
        });
    </script>
</div>
