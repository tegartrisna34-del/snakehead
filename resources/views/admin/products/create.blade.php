@extends('layouts.admin')

@section('title', 'Tambah Produk')

@section('content')
    <div class="max-w-4xl mx-auto">
        <header class="flex justify-between items-center mb-10">
            <div>
                <a href="{{ route('admin.products.index') }}" class="text-emerald-500 hover:underline mb-2 block">← Kembali ke Daftar</a>
                <h2 class="text-3xl font-bold">Tambah Produk Baru</h2>
            </div>
        </header>

        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
            @csrf
            
            <div class="glass p-8 rounded-[2rem] space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Nama Produk -->
                    <div class="space-y-2">
                        <label class="text-sm font-bold text-gray-400 uppercase tracking-widest">Nama Produk</label>
                        <input type="text" name="name" required class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 focus:outline-none focus:border-emerald-500/50 transition text-white" placeholder="Contoh: Channa Maru Grade A+">
                    </div>

                    <!-- Kategori -->
                    <div class="space-y-2">
                        <label class="text-sm font-bold text-gray-400 uppercase tracking-widest">Kategori</label>
                        <select name="category_id" required class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 focus:outline-none focus:border-emerald-500/50 transition text-white appearance-none">
                            <option value="" disabled selected>Pilih Kategori</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" class="bg-[#0c1117]">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Harga -->
                    <div class="space-y-2">
                        <label class="text-sm font-bold text-gray-400 uppercase tracking-widest">Harga (Rp)</label>
                        <input type="number" name="price" required class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 focus:outline-none focus:border-emerald-500/50 transition text-white" placeholder="0">
                    </div>

                    <!-- Stok -->
                    <div class="space-y-2">
                        <label class="text-sm font-bold text-gray-400 uppercase tracking-widest">Stok</label>
                        <div class="flex space-x-4">
                            <input type="number" name="stock" required class="flex-1 bg-white/5 border border-white/10 rounded-xl px-4 py-3 focus:outline-none focus:border-emerald-500/50 transition text-white" placeholder="0">
                            <input type="text" name="unit" class="w-24 bg-white/5 border border-white/10 rounded-xl px-4 py-3 focus:outline-none focus:border-emerald-500/50 transition text-white" placeholder="Ekor">
                        </div>
                    </div>
                </div>

                <!-- Deskripsi -->
                <div class="space-y-2">
                    <label class="text-sm font-bold text-gray-400 uppercase tracking-widest">Deskripsi Produk</label>
                    <textarea name="description" required rows="4" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 focus:outline-none focus:border-emerald-500/50 transition text-white" placeholder="Jelaskan detail produk..."></textarea>
                </div>

                <!-- Gambar -->
                <div class="space-y-2">
                    <label class="text-sm font-bold text-gray-400 uppercase tracking-widest">Foto Produk</label>
                    <div class="relative group">
                        <input type="file" name="image" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-10 focus:outline-none focus:border-emerald-500/50 transition cursor-pointer file:hidden text-gray-500" id="imageInput">
                        <div class="absolute inset-x-0 top-0 h-full flex flex-col items-center justify-center pointer-events-none" id="placeholder">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-emerald-500 mb-2 opacity-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-sm">Klik atau seret gambar ke sini</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="px-10 py-4 snake-gradient rounded-2xl font-bold uppercase tracking-widest hover:opacity-90 transition shadow-lg shadow-emerald-500/20">
                    Simpan Produk
                </button>
            </div>
        </form>
    </div>

    <script>
        const input = document.getElementById('imageInput');
        const placeholder = document.getElementById('placeholder');
        
        input.addEventListener('change', function() {
            if (this.files && this.files[0]) {
                placeholder.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-emerald-500 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-emerald-500 font-bold">${this.files[0].name} terpilih</span>
                `;
            }
        });
    </script>
@endsection
