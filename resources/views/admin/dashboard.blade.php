<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard | Snakehead Culture</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Outfit', sans-serif; background-color: #0c1117; color: #e6edf3; }
        .glass { background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); }
        .snake-gradient { background: linear-gradient(135deg, #059669 0%, #10b981 100%); }
    </style>
</head>
<body class="antialiased flex">
    <!-- Sidebar -->
    <aside class="w-64 h-screen glass fixed p-6">
        <h1 class="text-xl font-bold snake-gradient bg-clip-text text-transparent mb-10 italic">SC ADMIN</h1>
        <nav class="space-y-4">
            <a href="#" class="block px-4 py-3 rounded-xl bg-emerald-500/10 text-emerald-500 font-bold">Dashboard</a>
            <a href="#" class="block px-4 py-3 rounded-xl hover:bg-white/5 transition">Produk</a>
            <a href="#" class="block px-4 py-3 rounded-xl hover:bg-white/5 transition">Pesanan</a>
            <a href="#" class="block px-4 py-3 rounded-xl hover:bg-white/5 transition">Kategori</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="ml-64 p-10 w-full">
        <header class="flex justify-between items-center mb-10">
            <h2 class="text-3xl font-bold">Dashboard Overview</h2>
            <div class="flex items-center space-x-4">
                <span class="text-sm text-gray-500">Welcome, Admin</span>
                <div class="h-10 w-10 rounded-full snake-gradient"></div>
            </div>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <div class="glass p-8 rounded-3xl">
                <p class="text-gray-500 text-sm">Total Penjualan</p>
                <p class="text-3xl font-bold mt-2">Rp 45.000.000</p>
            </div>
            <div class="glass p-8 rounded-3xl">
                <p class="text-gray-500 text-sm">Pesanan Baru</p>
                <p class="text-3xl font-bold mt-2">12</p>
            </div>
            <div class="glass p-8 rounded-3xl">
                <p class="text-gray-500 text-sm">Stok Rendah</p>
                <p class="text-3xl font-bold mt-2 text-red-500">3</p>
            </div>
        </div>

        <div class="glass rounded-[2rem] overflow-hidden">
            <div class="p-8 border-b border-white/10">
                <h3 class="font-bold">Pesanan Terbaru</h3>
            </div>
            <table class="w-full text-left">
                <thead class="bg-white/5 text-xs uppercase text-gray-500">
                    <tr>
                        <th class="px-8 py-4">Nomor Pesanan</th>
                        <th class="px-8 py-4">Pembeli</th>
                        <th class="px-8 py-4">Total</th>
                        <th class="px-8 py-4">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/5">
                    <tr>
                        <td class="px-8 py-4 font-mono text-emerald-500">ORD-XJ82910</td>
                        <td class="px-8 py-4">John Doe</td>
                        <td class="px-8 py-4 font-bold">Rp 2.500.000</td>
                        <td class="px-8 py-4"><span class="px-3 py-1 bg-yellow-500/10 text-yellow-500 text-xs rounded-full">Pending</span></td>
                    </tr>
                    <!-- More rows... -->
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
