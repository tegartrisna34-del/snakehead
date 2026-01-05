<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add New Product | Snakehead Culture</title>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --primary: #10b981;
            --bg: #050505;
        }
        body { 
            font-family: 'Inter', sans-serif; 
            background-color: var(--bg); 
            color: #ffffff;
        }
        .font-syne { font-family: 'Syne', sans-serif; }
        .glass { 
            background: rgba(255, 255, 255, 0.03); 
            backdrop-filter: blur(20px); 
            border: 1px solid rgba(255, 255, 255, 0.08); 
        }
        .input-glass {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }
        .input-glass:focus {
            border-color: var(--primary);
            background: rgba(255, 255, 255, 0.08);
            outline: none;
            box-shadow: 0 0 0 4px rgba(16, 185, 129, 0.1);
        }
    </style>
</head>
<body class="antialiased min-h-screen flex items-center justify-center py-20 px-6">
    <div class="max-w-xl w-full">
        <div class="mb-10 text-center">
            <h1 class="text-4xl font-extrabold font-syne tracking-tight mb-2 uppercase">Add New <span class="text-emerald-500 italic">Product</span></h1>
            <p class="text-gray-500">Mulai koleksi premium baru untuk pelanggan setia.</p>
        </div>

        <div class="glass p-10 rounded-[2.5rem]">
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                
                <div>
                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-500 mb-2">Product Name</label>
                    <input type="text" name="name" required class="w-full px-6 py-4 rounded-2xl input-glass text-white font-medium" placeholder="Contoh: Channa Barca Grade A+">
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-500 mb-2">Category</label>
                    <select name="category_id" required class="w-full px-6 py-4 rounded-2xl input-glass text-gray-300 font-medium appearance-none">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-widest text-gray-500 mb-2">Price (IDR)</label>
                        <input type="number" name="price" required class="w-full px-6 py-4 rounded-2xl input-glass text-white font-medium" placeholder="1500000">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-widest text-gray-500 mb-2">Stock</label>
                        <input type="number" name="stock" required class="w-full px-6 py-4 rounded-2xl input-glass text-white font-medium" placeholder="1">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-500 mb-2">Product Image (Foto)</label>
                    <div class="relative group">
                        <input type="file" name="image" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                        <div class="w-full px-6 py-10 rounded-2xl border-2 border-dashed border-white/10 group-hover:border-emerald-500/50 transition-all flex flex-col items-center justify-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-sm text-gray-400 font-medium">Klik untuk upload foto <span class="text-emerald-500">Premium</span></span>
                            <span class="text-[10px] text-gray-600 mt-1 uppercase tracking-widest">PNG, JPG up to 2MB</span>
                        </div>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-500 mb-2">Description</label>
                    <textarea name="description" rows="4" class="w-full px-6 py-4 rounded-2xl input-glass text-white font-medium" placeholder="Ceritakan tentang keunikan spesimen ini..."></textarea>
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full py-5 bg-emerald-500 hover:bg-emerald-400 text-black font-extrabold uppercase tracking-[0.2em] text-xs rounded-2xl transition-all shadow-[0_20px_40px_-10px_rgba(16,185,129,0.3)] hover:translate-y-[-2px]">
                        Save Product
                    </button>
                    <a href="{{ route('home') }}" class="block text-center mt-6 text-xs font-bold uppercase tracking-widest text-gray-600 hover:text-emerald-500 transition-colors">Back to Home</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
