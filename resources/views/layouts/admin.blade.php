<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | SC Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Outfit', sans-serif; background-color: #0c1117; color: #e6edf3; }
        .glass { background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); }
        .snake-gradient { background: linear-gradient(135deg, #059669 0%, #10b981 100%); }
        .sidebar-link.active { background: rgba(16, 185, 129, 0.1); color: #10b981; font-weight: bold; }
    </style>
</head>
<body class="antialiased flex">
    <!-- Sidebar -->
    <aside class="w-64 h-screen glass fixed p-6">
        <h1 class="text-xl font-bold snake-gradient bg-clip-text text-transparent mb-10 italic">SC ADMIN</h1>
        <nav class="space-y-4">
            <a href="{{ route('admin.dashboard') }}" class="sidebar-link block px-4 py-3 rounded-xl hover:bg-white/5 transition {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
            <a href="{{ route('admin.products.index') }}" class="sidebar-link block px-4 py-3 rounded-xl hover:bg-white/5 transition {{ request()->routeIs('admin.products.*') ? 'active' : '' }}">Produk</a>
            <a href="{{ route('admin.orders.index') }}" class="sidebar-link block px-4 py-3 rounded-xl hover:bg-white/5 transition {{ request()->routeIs('admin.orders.*') ? 'active' : '' }}">Pesanan</a>
            <a href="{{ route('admin.categories.index') }}" class="sidebar-link block px-4 py-3 rounded-xl hover:bg-white/5 transition {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">Kategori</a>
            <div class="pt-10 border-t border-white/10">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-3 rounded-xl hover:bg-red-500/10 text-red-500 transition">Logout</button>
                </form>
            </div>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="ml-64 p-10 w-full">
        @if(session('success'))
            <div class="mb-10 p-4 bg-emerald-500/20 border border-emerald-500/50 text-emerald-400 rounded-2xl">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>
