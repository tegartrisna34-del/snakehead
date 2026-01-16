@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
    <header class="flex justify-between items-center mb-10">
        <h2 class="text-3xl font-bold">Dashboard Overview</h2>
        <div class="flex items-center space-x-4">
            <span class="text-sm text-gray-500 italic uppercase tracking-wider">Welcome, {{ Auth::user()->name }}</span>
            <div class="h-10 w-10 rounded-full snake-gradient"></div>
        </div>
    </header>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        <a href="{{ route('admin.orders.index') }}" class="glass p-8 rounded-3xl hover:bg-emerald-500/5 transition group">
            <p class="text-gray-500 text-sm font-bold uppercase tracking-widest">Total Sales</p>
            <p class="text-3xl font-bold mt-2">Rp {{ number_format(\App\Models\Order::where('status', '!=', 'cancelled')->sum('total_amount'), 0, ',', '.') }}</p>
            <div class="mt-4 text-xs text-emerald-500">Based on valid orders</div>
        </a>
        <a href="{{ route('admin.orders.index') }}" class="glass p-8 rounded-3xl hover:bg-yellow-500/5 transition group">
            <p class="text-gray-500 text-sm font-bold uppercase tracking-widest">New Orders</p>
            <p class="text-3xl font-bold mt-2">{{ \App\Models\Order::where('status', 'pending')->count() }}</p>
            <div class="mt-4 text-xs text-yellow-500">Requires immediate processing</div>
        </a>
        <a href="{{ route('admin.products.index') }}" class="glass p-8 rounded-3xl hover:bg-red-500/5 transition group">
            <p class="text-gray-500 text-sm font-bold uppercase tracking-widest">Low Stock</p>
            <p class="text-3xl font-bold mt-2 {{ \App\Models\Product::where('stock', '<', 5)->count() > 0 ? 'text-red-500' : '' }}">
                {{ \App\Models\Product::where('stock', '<', 5)->count() }}
            </p>
            <div class="mt-4 text-xs text-gray-400">Products with less than 5 units</div>
        </a>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
        <a href="{{ route('admin.products.create') }}" class="glass p-8 rounded-3xl hover:bg-emerald-500/10 transition group text-center border-emerald-500/20">
            <div class="h-12 w-12 bg-emerald-500/10 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
            </div>
            <h3 class="font-bold text-lg mb-2">Add Product</h3>
            <p class="text-sm text-gray-500">Upload new Channa collection or equipment</p>
        </a>

        <a href="{{ route('admin.products.index') }}" class="glass p-8 rounded-3xl hover:bg-emerald-500/10 transition group text-center border-emerald-500/20">
            <div class="h-12 w-12 bg-emerald-500/10 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                </svg>
            </div>
            <h3 class="font-bold text-lg mb-2">View Inventory</h3>
            <p class="text-sm text-gray-500">Monitor stock and update product prices</p>
        </a>
    </div>

    <div class="glass rounded-[2rem] overflow-hidden">
        <div class="p-8 border-b border-white/10 flex justify-between items-center">
            <h3 class="font-bold text-xl">Recent Orders</h3>
            <a href="{{ route('admin.orders.index') }}" class="text-sm text-emerald-500 hover:underline">View All →</a>
        </div>
        <table class="w-full text-left">
            <thead class="bg-white/5 text-xs uppercase text-gray-500">
                <tr>
                    <th class="px-8 py-4">Order Number</th>
                    <th class="px-8 py-4">Customer</th>
                    <th class="px-8 py-4">Total</th>
                    <th class="px-8 py-4">Status</th>
                    <th class="px-8 py-4 text-right">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-white/5">
                @forelse(\App\Models\Order::with('user')->latest()->take(5)->get() as $order)
                <tr class="hover:bg-white/5 transition">
                    <td class="px-8 py-4 font-mono text-emerald-500">#{{ $order->order_number }}</td>
                    <td class="px-8 py-4 text-white">{{ $order->user->name }}</td>
                    <td class="px-8 py-4 font-bold">Rp {{ number_format($order->total_amount, 0, ',', '.') }}</td>
                    <td class="px-8 py-4">
                        @php
                            $statusColors = [
                                'pending' => 'bg-yellow-500/10 text-yellow-500',
                                'paid' => 'bg-blue-500/10 text-blue-500',
                                'shipped' => 'bg-emerald-500/10 text-emerald-500',
                                'completed' => 'bg-gray-500/10 text-gray-400',
                                'cancelled' => 'bg-red-500/10 text-red-500',
                            ];
                        @endphp
                        <span class="px-3 py-1 rounded-full text-xs font-bold {{ $statusColors[$order->status] ?? 'bg-white/5' }}">
                            {{ strtoupper($order->status) }}
                        </span>
                    </td>
                    <td class="px-8 py-4 text-right">
                        <a href="{{ route('admin.orders.show', $order) }}" class="p-2 hover:text-emerald-500 transition inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-8 py-10 text-center text-gray-500 italic">No recent orders yet.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
