<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout | Snakehead Culture</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Outfit', sans-serif; background-color: #0c1117; color: #e6edf3; }
        .glass { background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); }
        .snake-gradient { background: linear-gradient(135deg, #059669 0%, #10b981 100%); }
        select option { color: #1f2937; background-color: #ffffff; }
        select option:hover { background-color: #e5f3ff; }
        select option:checked { background: linear-gradient(135deg, #059669 0%, #10b981 100%); color: #ffffff; }
        input, textarea, select { color: #ffffff !important; }
        input::placeholder, textarea::placeholder { color: #a0aec0 !important; opacity: 1; }
    </style>
</head>
<body class="antialiased min-h-screen py-20 px-4">
    <div class="max-w-4xl mx-auto">
        <a href="{{ route('home') }}" class="text-emerald-500 hover:underline mb-8 inline-block">← Kembali Belanja</a>
        <h1 class="text-4xl font-bold mb-10">Checkout</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <!-- Order Summary -->
            <div class="glass p-8 rounded-3xl h-fit">
                <h2 class="text-xl font-bold mb-6">Ringkasan Pesanan</h2>
                <div class="space-y-4">
                    @foreach($cart as $id => $details)
                    <div class="flex justify-between items-center text-sm">
                        <div class="flex items-center space-x-4">
                            <div class="h-12 w-12 bg-white/10 rounded-lg overflow-hidden">
                                <img src="{{ $details['image'] ?? 'https://source.unsplash.com/100x100/?fish' }}" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <p class="font-bold">{{ $details['name'] }}</p>
                                <p class="text-gray-500">Qty: {{ $details['quantity'] }}</p>
                            </div>
                        </div>
                        <p class="font-bold">Rp {{ number_format($details['price'] * $details['quantity'], 0, ',', '.') }}</p>
                    </div>
                    @endforeach
                </div>
                <div class="border-t border-white/10 mt-6 pt-6 flex justify-between items-center">
                    <span class="text-lg">Total</span>
                    <span class="text-2xl font-bold text-emerald-500">
                        Rp {{ number_format(array_reduce($cart, function($carry, $item) { return $carry + ($item['price'] * $item['quantity']); }, 0), 0, ',', '.') }}
                    </span>
                </div>
            </div>

            <!-- Billing Form -->
            <div class="glass p-8 rounded-3xl">
                <h2 class="text-xl font-bold mb-6">Informasi Pengiriman</h2>
                <form action="{{ route('checkout.process') }}" method="POST" class="space-y-4" id="checkout-form">
                    @csrf
                    <div>
                        <label class="block text-sm text-white mb-1">Nama Lengkap</label>
                        <input type="text" name="name" required class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 focus:border-emerald-500 outline-none">
                    </div>
                    <div>
                        <label class="block text-sm text-white mb-1">Email</label>
                        <input type="email" name="email" required class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 focus:border-emerald-500 outline-none">
                    </div>
                    <div>
                        <label class="block text-sm text-white mb-1">Nomor WhatsApp</label>
                        <input type="text" name="phone" required class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 focus:border-emerald-500 outline-none">
                    </div>
                    <div>
                        <label class="block text-sm text-white mb-1">Alamat Lengkap</label>
                        <textarea name="address" required rows="3" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 focus:border-emerald-500 outline-none"></textarea>
                    </div>
                    <div>
                        <label class="block text-sm text-white mb-1">Provinsi</label>
                        <select id="province" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 focus:border-emerald-500 outline-none text-gray-900">
                            <option value="">Memuat provinsi...</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm text-white mb-1">Kota / Kabupaten</label>
                        <select id="city_select" name="city" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 focus:border-emerald-500 outline-none text-gray-900">
                            <option value="">Pilih provinsi terlebih dahulu</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm text-white mb-1">Kurir</label>
                        <select id="courier" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 focus:border-emerald-500 outline-none text-gray-900">
                            <option value="jne">JNE</option>
                            <option value="jnt">J&T</option>
                            <option value="sicepat">SiCepat</option>
                        </select>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <button type="button" id="check-shipping" class="py-2 px-4 snake-gradient rounded-xl font-bold">Cek Ongkir</button>
                        </div>
                        <div class="text-right">
                            <div class="text-xs text-gray-400">Ongkir:</div>
                            <div id="shipping-display" class="text-emerald-400 font-bold">Rp 0</div>
                        </div>
                    </div>

                    <input type="hidden" name="shipping_cost" id="shipping_cost" value="0">
                    <h3 class="text-lg font-bold mt-6">Metode Pembayaran</h3>
                    <div class="mt-2 space-y-2">
                        <label class="flex items-center space-x-3 text-white">
                            <input type="radio" name="payment_method" value="transfer" checked>
                            <span>Transfer Bank</span>
                        </label>
                        <div class="ml-6 mb-2">
                            <select name="bank" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 focus:border-emerald-500 outline-none text-gray-900">
                                <option value="BCA">BCA</option>
                                <option value="BRI">BRI</option>
                                <option value="Mandiri">Mandiri</option>
                            </select>
                        </div>

                        <label class="flex items-center space-x-3 text-white">
                            <input type="radio" name="payment_method" value="cod">
                            <span>COD (Bayar di tempat)</span>
                        </label>
                    </div>

                    <button type="submit" class="w-full py-4 snake-gradient rounded-xl font-bold mt-6 shadow-lg hover:scale-105 transition">Bayar Sekarang</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Load provinces from server proxy to avoid CORS issues
        (function loadProvinces(){
            const provinceSelect = document.getElementById('province');
            fetch('/api/provinces')
                .then(r => {
                    if (!r.ok) throw new Error('HTTP ' + r.status);
                    return r.json();
                })
                .then(data => {
                    console.log('Provinces loaded:', data.length);
                    provinceSelect.innerHTML = '<option value="">Pilih Provinsi</option>' + data.map(p => `<option value="${p.id}">${p.name}</option>`).join('');
                }).catch(err => { console.error('Failed to load provinces:', err); provinceSelect.innerHTML = '<option value="">Gagal memuat provinsi - coba muat ulang</option>'; });
        })();

        document.getElementById('province').addEventListener('change', function (){
            const provId = this.value;
            const citySelect = document.getElementById('city_select');
            citySelect.innerHTML = '<option>Memuat kota...</option>';
            if (!provId) { citySelect.innerHTML = '<option value="">Pilih provinsi terlebih dahulu</option>'; return; }
            fetch('/api/regencies/' + provId)
                .then(r => {
                    if (!r.ok) throw new Error('HTTP ' + r.status);
                    return r.json();
                })
                .then(data => {
                    console.log('Regencies loaded:', data.length);
                    citySelect.innerHTML = '<option value="">Pilih Kota / Kabupaten</option>' + data.map(c => `<option value="${c.name}">${c.name}</option>`).join('');
                }).catch(err => { console.error('Failed to load regencies:', err); citySelect.innerHTML = '<option value="">Gagal memuat kota - coba muat ulang</option>'; });
        });

        document.getElementById('check-shipping').addEventListener('click', function () {
            const city = document.getElementById('city_select').value || '';
            const courier = document.getElementById('courier').value;
            if (!city) { alert('Masukkan kota tujuan dahulu.'); return; }

            fetch('{{ route('shipping.cost') }}', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                body: JSON.stringify({ courier: courier, destination_city: city })
            }).then(r => r.json()).then(data => {
                if (data.success) {
                    document.getElementById('shipping-display').innerText = 'Rp ' + new Intl.NumberFormat('id-ID').format(data.cost);
                    document.getElementById('shipping_cost').value = data.cost;
                } else {
                    alert('Gagal mendapat ongkir.');
                }
            }).catch(err => { alert('Error saat cek ongkir'); console.error(err); });
        });
    </script>
</body>
</html>
