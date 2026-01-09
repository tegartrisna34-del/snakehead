@extends('layouts.admin')

@section('title', 'Tambah Kategori')

@section('content')
    <div class="max-w-2xl mx-auto">
        <header class="flex justify-between items-center mb-10">
            <div>
                <a href="{{ route('admin.categories.index') }}" class="text-emerald-500 hover:underline mb-2 block">← Kembali ke Daftar</a>
                <h2 class="text-3xl font-bold">Tambah Kategori Baru</h2>
            </div>
        </header>

        <form action="{{ route('admin.categories.store') }}" method="POST" class="space-y-8">
            @csrf
            
            <div class="glass p-8 rounded-[2rem] space-y-6">
                <!-- Nama Kategori -->
                <div class="space-y-2">
                    <label class="text-sm font-bold text-gray-400 uppercase tracking-widest">Nama Kategori</label>
                    <input type="text" name="name" required class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 focus:outline-none focus:border-emerald-500/50 transition text-white" placeholder="Contoh: Channa Maru">
                    @error('name')<p class="text-xs text-red-500 mt-1">{{ $message }}</p>@enderror
                </div>

                <!-- Deskripsi -->
                <div class="space-y-2">
                    <label class="text-sm font-bold text-gray-400 uppercase tracking-widest">Deskripsi (Opsional)</label>
                    <textarea name="description" rows="3" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 focus:outline-none focus:border-emerald-500/50 transition text-white" placeholder="Penjelasan singkat kategori ini..."></textarea>
                </div>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="px-10 py-4 snake-gradient rounded-2xl font-bold uppercase tracking-widest hover:opacity-90 transition shadow-lg shadow-emerald-500/20">
                    Simpan Kategori
                </button>
            </div>
        </form>
    </div>
@endsection
