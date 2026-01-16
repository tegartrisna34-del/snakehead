@extends('layouts.admin')

@section('title', 'Category Management')

@section('content')
    <header class="flex justify-between items-center mb-10">
        <h2 class="text-3xl font-bold">Product Categories</h2>
        <a href="{{ route('admin.categories.create') }}" class="px-6 py-3 snake-gradient rounded-xl font-bold hover:opacity-90 transition">
            + Add Category
        </a>
    </header>

    @if(session('error'))
        <div class="mb-10 p-4 bg-red-500/20 border border-red-500/50 text-red-400 rounded-2xl">
            {{ session('error') }}
        </div>
    @endif

    <div class="glass rounded-[2rem] overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-white/5 text-xs uppercase text-gray-500">
                <tr>
                    <th class="px-8 py-4">Category Name</th>
                    <th class="px-8 py-4">Slug</th>
                    <th class="px-8 py-4">Product Count</th>
                    <th class="px-8 py-4">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-white/5">
                @foreach($categories as $category)
                <tr>
                    <td class="px-8 py-4 font-medium">{{ $category->name }}</td>
                    <td class="px-8 py-4 text-gray-400 font-mono">{{ $category->slug }}</td>
                    <td class="px-8 py-4">{{ $category->products_count }} items</td>
                    <td class="px-8 py-4">
                        <div class="flex items-center space-x-3">
                            <a href="{{ route('admin.categories.edit', $category) }}" class="p-2 hover:bg-emerald-500/10 text-emerald-500 rounded-lg transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </a>
                            <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" onsubmit="return confirm('Hapus kategori ini?')">
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
