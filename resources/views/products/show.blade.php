<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $product->name }} - Snakehead Culture</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>body{background:#0c1117;color:#e6edf3;font-family:Outfit, sans-serif}.glass{background:rgba(255,255,255,0.04);backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,0.06)}</style>
</head>
<body class="antialiased py-24">
    <div class="max-w-5xl mx-auto px-6">
        <a href="{{ route('home') }}" class="text-emerald-500 hover:underline mb-6 inline-block">← Kembali</a>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <div class="glass rounded-2xl overflow-hidden">
                <img src="{{ $product->image ? asset($product->image) : 'https://via.placeholder.com/1200x900' }}" alt="{{ $product->name }}" class="w-full h-[520px] object-cover">
            </div>
            <div class="glass p-8 rounded-2xl">
                <h1 class="text-3xl font-bold mb-2">{{ $product->name }}</h1>
                <div class="flex items-center justify-between mb-4">
                    <div class="text-gray-300">{{ $product->category->name ?? 'Produk' }}</div>
                    <div class="text-emerald-400 font-bold text-2xl">Rp {{ number_format($product->price,0,',','.') }}</div>
                </div>

                <div class="mb-4">
                    <span class="text-xs font-bold uppercase tracking-widest">STOK</span>
                    <div class="mt-2">
                        <span class="px-3 py-1 rounded-full text-xs font-bold {{ $product->stock > 5 ? 'bg-emerald-500/20 text-emerald-400' : ($product->stock > 0 ? 'bg-yellow-500/20 text-yellow-400' : 'bg-red-500/20 text-red-400') }}">{{ $product->stock ?? 0 }} Unit</span>
                    </div>
                </div>

                <p class="text-gray-300 leading-relaxed mb-6">{{ $product->description }}</p>

                <p class="text-sm text-gray-400">For more species information, see our <a href="{{ route('species') }}" class="text-emerald-400 hover:underline">Species Reference</a>.</p>

                        @auth
                    <form action="{{ route('cart.add', $product->id) }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label class="text-sm text-gray-300 mb-1 block">Jumlah</label>
                            <input type="number" name="quantity" value="1" min="1" max="{{ max(1, $product->stock) }}" class="w-40 px-4 py-2 rounded bg-white/5 text-white outline-none">
                        </div>
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button type="submit" class="w-full py-4 bg-[#0b0b0b] rounded-2xl border border-white/6 text-white font-bold uppercase tracking-widest hover:shadow-[0_10px_30px_rgba(0,0,0,0.6)] transition-all">
                            Tambah ke Keranjang
                        </button>
                    </form>
                @endauth

                @guest
                    <div class="space-y-4">
                        <p class="text-yellow-300 font-bold">Anda harus login untuk menambahkan produk ke keranjang.</p>
                        <div class="flex space-x-4">
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}?redirect={{ url()->current() }}" class="px-6 py-3 bg-emerald-500 rounded font-bold">Login</a>
                            @else
                                <a href="{{ url('/login') }}?redirect={{ url()->current() }}" class="px-6 py-3 bg-emerald-500 rounded font-bold">Login</a>
                            @endif

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}?redirect={{ url()->current() }}" class="px-6 py-3 border border-white/10 rounded">Buat Akun</a>
                            @else
                                <a href="{{ url('/register') }}?redirect={{ url()->current() }}" class="px-6 py-3 border border-white/10 rounded">Buat Akun</a>
                            @endif
                        </div>
                    </div>
                @endguest

            </div>
        </div>
    </div>
</body>
</html>
