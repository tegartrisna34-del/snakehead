@extends('layouts.admin')

@section('title', 'Daftar Produk')

@section('content')
    <header class="flex justify-between items-center mb-10">
        <h2 class="text-3xl font-bold">Manajemen Produk</h2>
        <a href="{{ route('admin.products.create') }}" class="px-6 py-3 snake-gradient rounded-xl font-bold hover:opacity-90 transition">
            + Tambah Produk
        </a>
    </header>

    <div class="glass rounded-[2rem] overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-white/5 text-xs uppercase text-gray-500">
                <tr>
                    <th class="px-8 py-4">Produk</th>
                    <th class="px-8 py-4">Kategori</th>
                    <th class="px-8 py-4">Harga</th>
                    <th class="px-8 py-4">Stok</th>
                    <th class="px-8 py-4">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-white/5">
                @foreach($products as $product)
                <tr>
                    <td class="px-8 py-4">
                        <div class="flex items-center space-x-4">
                            <div class="h-12 w-12 rounded-lg overflow-hidden glass">
                                <img src="{{ $product->image ? asset($product->image) : 'https://via.placeholder.com/100' }}" class="h-full w-full object-cover">
                            </div>
                            <span class="font-medium">{{ $product->name }}</span>
                        </div>
                    </td>
                    <td class="px-8 py-4 text-gray-400">{{ $product->category->name ?? 'Tanpa Kategori' }}</td>
                    <td class="px-8 py-4 font-bold text-emerald-400">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                    <td class="px-8 py-4">
                        <span class="px-3 py-1 rounded-full text-xs font-bold {{ $product->stock > 5 ? 'bg-emerald-500/10 text-emerald-500' : 'bg-red-500/10 text-red-500' }}">
                            {{ $product->stock }} {{ $product->unit }}
                        </span>
                    </td>
                    <td class="px-8 py-4">
                        <div class="flex items-center space-x-3">
                            <a href="{{ route('admin.products.edit', $product) }}" class="p-2 hover:bg-emerald-500/10 text-emerald-500 rounded-lg transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </a>
                            <form action="{{ route('admin.products.destroy', $product) }}" method="POST" onsubmit="return confirm('Hapus produk ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-2 hover:bg-red-500/10 text-red-500 rounded-lg transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
