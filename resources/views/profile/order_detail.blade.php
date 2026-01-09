@extends('layouts.app')

@section('title', 'Detail Pesanan #' . $order->order_number . ' | Snakehead Culture')

@section('content')
<div class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
    <div class="mb-12">
        <a href="{{ route('profile.orders') }}" class="text-emerald-500 font-bold uppercase text-[10px] tracking-widest hover:text-emerald-400 transition-colors flex items-center mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" /></svg>
            Kembali ke Daftar Pesanan
        </a>
        <h1 class="text-4xl md:text-5xl font-extrabold font-syne tracking-tight">Detail <span class="text-emerald-500 italic">Pesanan</span></h1>
        <p class="text-gray-500 mt-2 font-mono uppercase tracking-widest text-sm">Invoice #{{ $order->order_number }}</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
        <!-- Order Items -->
        <div class="lg:col-span-2 space-y-6">
            <div class="glass rounded-[2rem] overflow-hidden border border-white/5">
                <div class="p-8 border-b border-white/10">
                    <h3 class="font-bold text-lg font-syne uppercase tracking-wider">Koleksi yang Dipesan</h3>
                </div>
                <div class="divide-y divide-white/5">
                    @foreach($order->items as $item)
                    <div class="p-8 flex items-center gap-6 group">
                        <div class="h-24 w-24 rounded-2xl overflow-hidden glass flex-shrink-0">
                            <img src="{{ $item->product->image ? asset($item->product->image) : 'https://via.placeholder.com/200' }}" 
                                 alt="{{ $item->product->name }}" 
                                 class="h-full w-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="flex-1">
                            <h4 class="font-bold text-xl mb-1">{{ $item->product->name }}</h4>
                            <p class="text-sm text-gray-500 uppercase tracking-widest font-bold">{{ $item->product->category->name ?? 'Premium Item' }}</p>
                        </div>
                        <div class="text-right">
                            <p class="text-lg font-bold">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                            <p class="text-sm text-gray-500">Qty: {{ $item->quantity }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="p-8 bg-white/5 space-y-4">
                    <div class="flex justify-between text-gray-400 text-sm">
                        <span>Subtotal</span>
                        <span>Rp {{ number_format($order->total_amount - $order->shipping_cost, 0, ',', '.') }}</span>
                    </div>
                    <div class="flex justify-between text-gray-400 text-sm">
                        <span>Biaya Pengiriman</span>
                        <span>Rp {{ number_format($order->shipping_cost, 0, ',', '.') }}</span>
                    </div>
                    <div class="flex justify-between text-white text-2xl font-bold pt-4 border-t border-white/10">
                        <span class="font-syne italic">Grand Total</span>
                        <span class="text-emerald-500">Rp {{ number_format($order->total_amount, 0, ',', '.') }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar Info -->
        <div class="space-y-6">
            <!-- Status Card -->
            <div class="glass p-8 rounded-[2rem] border border-white/5">
                <h3 class="font-bold text-xs uppercase tracking-[0.2em] text-gray-500 mb-6">Status Pesanan</h3>
                <div class="flex items-center gap-4 mb-8">
                    @php
                        $statusColors = [
                            'pending' => 'bg-yellow-500 text-black',
                            'paid' => 'bg-blue-500 text-white',
                            'shipped' => 'bg-emerald-500 text-black',
                            'completed' => 'bg-gray-700 text-white',
                            'cancelled' => 'bg-red-500 text-white',
                        ];
                    @endphp
                    <div class="px-5 py-2 rounded-full font-bold uppercase text-[10px] tracking-widest {{ $statusColors[$order->status] ?? 'bg-white/10 text-white' }}">
                        {{ $order->status }}
                    </div>
                </div>

                <div class="relative pl-8 space-y-10 before:content-[''] before:absolute before:left-[11px] before:top-2 before:bottom-2 before:w-[2px] before:bg-white/10">
                    <div class="relative before:content-[''] before:absolute before:-left-[21px] before:top-1 before:w-3 before:h-3 before:rounded-full before:bg-emerald-500 before:shadow-[0_0_10px_rgba(16,185,129,0.5)]">
                        <p class="text-xs font-bold text-white uppercase tracking-wider mb-1">Pesanan Dibuat</p>
                        <p class="text-[10px] text-gray-500">{{ $order->created_at->format('d M Y, H:i') }}</p>
                    </div>
                    
                    @if($order->status != 'pending')
                    <div class="relative before:content-[''] before:absolute before:-left-[21px] before:top-1 before:w-3 before:h-3 before:rounded-full before:bg-emerald-500">
                        <p class="text-xs font-bold text-white uppercase tracking-wider mb-1">Pembayaran Terverifikasi</p>
                        <p class="text-[10px] text-gray-500">{{ $order->updated_at->format('d M Y, H:i') }}</p>
                    </div>
                    @endif

                    @if($order->status == 'shipped' || $order->status == 'completed')
                    <div class="relative before:content-[''] before:absolute before:-left-[21px] before:top-1 before:w-3 before:h-3 before:rounded-full before:bg-emerald-500">
                        <p class="text-xs font-bold text-white uppercase tracking-wider mb-1">Dalam Pengiriman</p>
                        <p class="text-[10px] text-gray-500">Kurir sedang menuju lokasi</p>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Shipping Info -->
            <div class="glass p-8 rounded-[2rem] border border-white/5">
                <h3 class="font-bold text-xs uppercase tracking-[0.2em] text-gray-500 mb-6">Informasi Pengiriman</h3>
                <div class="space-y-6">
                    <div>
                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-2">Alamat Tujuan</p>
                        <p class="text-sm leading-relaxed text-white">{{ $order->shipping_address }}</p>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-2">Metode Pembayaran</p>
                        <div class="flex items-center gap-2">
                            <span class="px-2 py-0.5 glass rounded text-[9px] font-bold uppercase text-emerald-400">{{ $order->payment_method }}</span>
                            @if($order->bank)
                            <span class="text-sm text-white font-bold">{{ strtoupper($order->bank) }}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Button -->
            @if($order->status == 'pending')
            <div class="glass p-8 rounded-[2rem] border border-yellow-500/20 bg-yellow-500/5">
                <p class="text-xs text-yellow-500 font-bold mb-4 uppercase tracking-wider">Menunggu Pembayaran</p>
                <a href="https://wa.me/6282136048824?text=Halo SC, saya ingin konfirmasi pembayaran untuk pesanan #{{ $order->order_number }}" 
                   target="_blank"
                   class="block w-full py-4 bg-emerald-500 text-black text-center rounded-2xl font-bold uppercase text-xs tracking-widest hover:bg-emerald-400 transition-all shadow-lg shadow-emerald-500/10">
                    Konfirmasi via WA
                </a>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
