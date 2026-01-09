@extends('layouts.admin')

@section('title', 'Detail Pesanan')

@section('content')
    <div class="max-w-5xl mx-auto">
        <header class="flex justify-between items-center mb-10">
            <div>
                <a href="{{ route('admin.orders.index') }}" class="text-emerald-500 hover:underline mb-2 block">← Kembali ke Daftar Pesanan</a>
                <h2 class="text-3xl font-bold">Detail Pesanan <span class="text-emerald-500">#{{ $order->order_number }}</span></h2>
            </div>
            
            <form action="{{ route('admin.orders.update_status', $order) }}" method="POST" class="flex items-center space-x-4">
                @csrf
                @method('PUT')
                <select name="status" class="bg-white/5 border border-white/10 rounded-xl px-4 py-2 text-sm focus:outline-none">
                    <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="paid" {{ $order->status == 'paid' ? 'selected' : '' }}>Paid</option>
                    <option value="shipped" {{ $order->status == 'shipped' ? 'selected' : '' }}>Shipped</option>
                    <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
                    <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                </select>
                <button type="submit" class="px-6 py-2 snake-gradient rounded-xl text-sm font-bold">Update Status</button>
            </form>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Order Info -->
            <div class="md:col-span-2 space-y-8">
                <div class="glass p-8 rounded-[2rem]">
                    <h3 class="font-bold mb-6 text-xl">Daftar Produk</h3>
                    <div class="space-y-6">
                        @foreach($order->details as $detail)
                        <div class="flex items-center justify-between p-4 bg-white/5 rounded-2xl">
                            <div class="flex items-center space-x-4">
                                <img src="{{ asset($detail->product->image) }}" class="h-16 w-16 object-cover rounded-xl border border-white/10">
                                <div>
                                    <h4 class="font-bold">{{ $detail->product->name }}</h4>
                                    <p class="text-sm text-gray-500">{{ $detail->quantity }} {{ $detail->product->unit }} x Rp {{ number_format($detail->price, 0, ',', '.') }}</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="font-bold text-emerald-500">Rp {{ number_format($detail->price * $detail->quantity, 0, ',', '.') }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="mt-10 pt-6 border-t border-white/10 flex justify-between items-center px-4">
                        <span class="text-gray-400 font-bold uppercase tracking-widest text-sm">Total Pembayaran</span>
                        <span class="text-2xl font-bold text-white">Rp {{ number_format($order->total_amount, 0, ',', '.') }}</span>
                    </div>
                </div>
            </div>

            <!-- Customer Info -->
            <div class="space-y-8">
                <div class="glass p-8 rounded-[2rem]">
                    <h3 class="font-bold mb-6 text-lg">Informasi Pelanggan</h3>
                    <div class="space-y-4 text-sm text-gray-300">
                        <div>
                            <p class="text-gray-500 uppercase text-[10px] font-bold tracking-tighter mb-1">Nama</p>
                            <p class="font-medium text-white">{{ $order->user->name }}</p>
                        </div>
                        <div>
                            <p class="text-gray-500 uppercase text-[10px] font-bold tracking-tighter mb-1">Email</p>
                            <p class="font-medium text-white">{{ $order->user->email }}</p>
                        </div>
                        <div>
                            <p class="text-gray-500 uppercase text-[10px] font-bold tracking-tighter mb-1">Alamat Pengiriman</p>
                            <p class="leading-relaxed">{{ $order->shipping_address ?? 'Alamat tidak diatur.' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
