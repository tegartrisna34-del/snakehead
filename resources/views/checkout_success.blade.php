<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesanan Berhasil | Snakehead Culture</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Outfit', sans-serif; background-color: #0c1117; color: #e6edf3; }
        .glass { background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); }
        .snake-gradient { background: linear-gradient(135deg, #059669 0%, #10b981 100%); }
    </style>
</head>
<body class="antialiased min-h-screen flex items-center justify-center p-4">
    <div class="max-w-md w-full glass p-10 rounded-[3rem] text-center">
        <div class="h-20 w-20 snake-gradient rounded-full flex items-center justify-center mx-auto mb-8 shadow-xl">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
            </svg>
        </div>
        <h1 class="text-3xl font-bold mb-2">Pesanan Berhasil!</h1>
        <p class="text-gray-500 mb-8">Terima kasih telah berbelanja di Snakehead Culture. Pesanan Anda sedang diproses.</p>
        
        <div class="bg-white/5 rounded-2xl p-6 mb-8 text-left space-y-4">
            <div class="flex justify-between items-center border-b border-white/10 pb-4">
                <span class="text-sm text-gray-500 uppercase tracking-widest">Nomor Pesanan</span>
                <span class="text-xl font-mono font-bold text-emerald-500">{{ $order->order_number }}</span>
            </div>
            
            <div class="flex justify-between items-center border-b border-white/10 pb-4">
                <span class="text-sm text-gray-500 uppercase tracking-widest">Total Pembayaran</span>
                <span class="text-xl font-bold text-white">Rp {{ number_format($order->total_amount, 0, ',', '.') }}</span>
            </div>

            <div class="pt-2">
                @if($order->payment_method == 'transfer')
                    <div class="bg-emerald-500/10 border border-emerald-500/30 rounded-xl p-4">
                        <h3 class="text-emerald-500 font-bold mb-2 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
                            Silakan Transfer ke:
                        </h3>
                        @if($order->bank == 'BCA')
                            <p class="text-white text-lg font-mono">BCA: 123-456-7890</p>
                            <p class="text-sm text-gray-400">a.n Snakehead Culture</p>
                        @elseif($order->bank == 'BRI')
                            <p class="text-white text-lg font-mono">BRI: 0000-01-000000-50-0</p>
                            <p class="text-sm text-gray-400">a.n Snakehead Culture</p>
                        @elseif($order->bank == 'BNI')
                            <p class="text-white text-lg font-mono">BNI: 098-765-4321</p>
                            <p class="text-sm text-gray-400">a.n Snakehead Culture</p>
                        @elseif($order->bank == 'BSI')
                            <p class="text-white text-lg font-mono">BSI: 7777-8888-99</p>
                            <p class="text-sm text-gray-400">a.n Snakehead Culture</p>
                        @elseif($order->bank == 'Mandiri')
                            <p class="text-white text-lg font-mono">Mandiri: 123-00-0000000-0</p>
                            <p class="text-sm text-gray-400">a.n Snakehead Culture</p>
                        @else
                            <p class="text-white text-lg font-mono">BCA: 123-456-7890</p>
                            <p class="text-sm text-gray-400">a.n Snakehead Culture</p>
                        @endif
                        <p class="mt-4 text-xs text-gray-500">*Mohon konfirmasi bukti transfer via WhatsApp ke Admin</p>
                    </div>
                @elseif($order->payment_method == 'qris')
                    <div class="bg-indigo-500/10 border border-indigo-500/30 rounded-xl p-4">
                        <h3 class="text-indigo-400 font-bold mb-3 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M4 8h.01M4 16h.01M4 20h4M4 4h4v4H4V4zm12 0h4v4h-4V4zM4 16h4v4H4v-4z"/></svg>
                            QRIS (Scan Barcode)
                        </h3>
                        <div class="bg-white p-3 rounded-2xl inline-block mb-4 shadow-xl">
                            @php
                                $qrData = "Snakehead Culture - Order: " . $order->order_number . " - Total: Rp " . number_format($order->total_amount, 0, ',', '.');
                                $qrUrl = "https://api.qrserver.com/v1/create-qr-code/?size=200x200&margin=10&data=" . urlencode($qrData);
                            @endphp
                            <img src="{{ $qrUrl }}" alt="QRIS for {{ $order->order_number }}" class="w-40 h-40">
                        </div>
                        <div class="text-left space-y-1">
                            <p class="text-[10px] text-gray-500 uppercase font-bold tracking-wider">Metode Pembayaran:</p>
                            <p class="text-xs text-indigo-300 font-bold">QRIS Dynamic - Instant Verification</p>
                            <p class="text-[10px] text-gray-500 mt-2 italic">*Silakan scan di atas dan kirim bukti bayar ke Admin.</p>
                        </div>
                    </div>
                @elseif($order->payment_method == 'ewallet')
                    <div class="bg-blue-500/10 border border-blue-500/30 rounded-xl p-4">
                        <h3 class="text-blue-400 font-bold mb-2 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                            E-Wallet ({{ $order->bank ?? 'DANA/OVO' }})
                        </h3>
                        <p class="text-white text-lg font-mono">Nomor: 0882-7188-7763</p>
                        <p class="text-sm text-gray-400">a.n Snakehead Culture</p>
                        <p class="mt-2 text-xs text-gray-500">*Mohon konfirmasi via WhatsApp setelah transfer</p>
                    </div>
                @elseif($order->payment_method == 'cod')
                    <div class="bg-yellow-500/10 border border-yellow-500/30 rounded-xl p-4">
                        <h3 class="text-yellow-500 font-bold mb-2 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                            Cash On Delivery (COD)
                        </h3>
                        <p class="text-sm text-gray-300">Harap siapkan uang tunai pas sebesar <strong>Rp {{ number_format($order->total_amount, 0, ',', '.') }}</strong> saat kurir tiba di alamat Anda.</p>
                    </div>
                @endif
                <div class="mt-6 flex justify-center">
                    <a href="https://wa.me/6288271887763?text=Halo%20Admin,%20saya%20konfirmasi%20pesanan%20{{ $order->order_number }}" target="_blank" class="flex items-center gap-2 text-emerald-500 hover:text-emerald-400 transition font-bold text-sm">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.008-.57-.008-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.248-.57-.397m-5.472 7.618c-2.388 0-4.636-.636-6.611-1.742l-.474-.265-4.91 1.285 1.31-4.782-.303-.483c-1.272-2.026-1.944-4.385-1.944-6.812 0-7.058 5.742-12.8 12.8-12.8 3.419 0 6.636 1.332 9.055 3.75 2.419 2.418 3.75 5.636 3.75 9.055 0 7.058-5.741 12.802-12.802 12.802"/></svg>
                        Konfirmasi ke Admin
                    </a>
                </div>
            </div>
        </div>

        <a href="{{ route('home') }}" class="block w-full py-4 glass rounded-2xl font-bold hover:bg-white/10 transition">Kembali ke Beranda</a>
    </div>
</body>
</html>
