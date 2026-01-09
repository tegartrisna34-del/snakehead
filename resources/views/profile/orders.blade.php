@extends('layouts.app')

@section('title', 'My Orders | Snakehead Culture')

@section('content')
<div class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12 gap-6">
        <div>
            <span class="inline-block px-4 py-1 rounded-full border border-emerald-500/30 bg-emerald-500/10 text-emerald-400 text-xs font-bold tracking-widest uppercase mb-4">Customer Portal</span>
            <h1 class="text-5xl font-extrabold font-syne tracking-tight">Pesanan <span class="text-emerald-500 italic">Saya</span></h1>
            <p class="text-gray-500 mt-2">Pantau status pengiriman dan riwayat transaksi koleksi Anda.</p>
        </div>
        <a href="{{ route('home') }}" class="px-8 py-4 glass rounded-[2rem] text-xs font-bold uppercase tracking-widest hover:bg-emerald-500 hover:text-black transition-all">
            Lanjut Belanja
        </a>
    </div>

    @if($orders->isEmpty())
    <div class="py-32 text-center glass rounded-[3rem] border-dashed border-white/10">
        <div class="w-20 h-20 bg-emerald-500/10 rounded-full flex items-center justify-center mx-auto mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
            </svg>
        </div>
        <h3 class="text-2xl font-bold font-syne">Belum ada pesanan.</h3>
        <p class="text-gray-500 mt-2">Mulai koleksi Channa pertama Anda hari ini.</p>
        <div class="mt-8">
            <a href="{{ route('home') }}" class="text-emerald-500 font-bold uppercase text-xs tracking-widest hover:underline">Jelajahi Koleksi →</a>
        </div>
    </div>
    @else
    <div class="grid gap-6">
        @foreach($orders as $order)
        <div class="glass rounded-[2rem] overflow-hidden border border-white/5 hover:border-emerald-500/30 transition-all group">
            <div class="p-8 flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
                <div class="flex items-center space-x-6">
                    <div class="h-16 w-16 rounded-2xl bg-emerald-500/10 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-gray-500 uppercase tracking-widest mb-1">{{ $order->created_at->format('d M Y') }}</p>
                        <h3 class="text-xl font-bold font-mono text-emerald-500">#{{ $order->order_number }}</h3>
                    </div>
                </div>

                <div class="flex flex-col md:items-end">
                    <p class="text-[10px] font-bold text-gray-500 uppercase tracking-widest mb-2">Total Pembayaran</p>
                    <p class="text-2xl font-bold">Rp {{ number_format($order->total_amount, 0, ',', '.') }}</p>
                </div>

                <div class="flex flex-col md:items-center gap-4">
                    @php
                        $statusColors = [
                            'pending' => 'bg-yellow-500/10 text-yellow-500 border-yellow-500/20',
                            'paid' => 'bg-blue-500/10 text-blue-500 border-blue-500/20',
                            'shipped' => 'bg-emerald-500/10 text-emerald-500 border-emerald-500/20',
                            'completed' => 'bg-gray-500/10 text-gray-400 border-gray-500/10',
                            'cancelled' => 'bg-red-500/10 text-red-500 border-red-500/20',
                        ];
                    @endphp
                    <span class="px-4 py-1.5 rounded-full text-[10px] font-bold uppercase tracking-widest border {{ $statusColors[$order->status] ?? 'bg-white/5 border-white/10' }}">
                        {{ $order->status }}
                    </span>
                    <a href="{{ route('profile.order_detail', $order->order_number) }}" class="text-xs font-bold text-emerald-500 hover:text-emerald-400 transition-colors uppercase tracking-widest group-hover:translate-x-1 duration-300">
                        Detail Pesanan →
                    </a>
                </div>
            </div>
            
            @if($order->items->count() > 0)
            <div class="px-8 pb-8 pt-2 border-t border-white/5">
                <div class="flex -space-x-4 overflow-hidden">
                    @foreach($order->items->take(5) as $item)
                    <img class="inline-block h-12 w-12 rounded-full ring-4 ring-[#0c1117] object-cover" 
                         src="{{ $item->product->image ? asset($item->product->image) : 'https://via.placeholder.com/100' }}" 
                         alt="{{ $item->product->name }}">
                    @endforeach
                    @if($order->items->count() > 5)
                    <div class="inline-flex h-12 w-12 rounded-full ring-4 ring-[#0c1117] bg-white/5 items-center justify-center text-[10px] font-bold">
                        +{{ $order->items->count() - 5 }}
                    </div>
                    @endif
                </div>
            </div>
            @endif
        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection
