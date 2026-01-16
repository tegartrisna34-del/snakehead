@extends('layouts.admin')

@section('title', 'Order Management')

@section('content')
    <header class="flex justify-between items-center mb-10">
        <h2 class="text-3xl font-bold">Order List</h2>
    </header>

    <div class="glass rounded-[2rem] overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-white/5 text-xs uppercase text-gray-500">
                <tr>
                    <th class="px-8 py-4">Order ID</th>
                    <th class="px-8 py-4">Customer</th>
                    <th class="px-8 py-4">Total</th>
                    <th class="px-8 py-4">Date</th>
                    <th class="px-8 py-4">Status</th>
                    <th class="px-8 py-4">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-white/5">
                @forelse($orders as $order)
                <tr>
                    <td class="px-8 py-4 font-mono text-emerald-500">#{{ $order->order_number }}</td>
                    <td class="px-8 py-4">
                        <div class="font-medium text-white">{{ $order->user->name }}</div>
                        <div class="text-xs text-gray-500">{{ $order->user->email }}</div>
                    </td>
                    <td class="px-8 py-4 font-bold">Rp {{ number_format($order->total_amount, 0, ',', '.') }}</td>
                    <td class="px-8 py-4 text-gray-400">{{ $order->created_at->format('d M Y') }}</td>
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
                    <td class="px-8 py-4">
                        <a href="{{ route('admin.orders.show', $order) }}" class="px-4 py-2 bg-white/5 hover:bg-white/10 rounded-lg text-xs transition">
                            Details
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-8 py-10 text-center text-gray-500 italic">No incoming orders yet.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
