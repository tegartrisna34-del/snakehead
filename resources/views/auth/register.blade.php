<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Account | Snakehead Culture</title>
    <!-- Premium Typography -->
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --primary: #10b981;
            --primary-glow: rgba(16, 185, 129, 0.4);
            --bg: #050505;
        }
        body { 
            font-family: 'Inter', sans-serif; 
            background-color: var(--bg); 
            color: #ffffff;
        }
        .font-syne { font-family: 'Syne', sans-serif; }
        .glass { 
            background: rgba(255, 255, 255, 0.03); 
            backdrop-filter: blur(25px); 
            border: 1px solid rgba(255, 255, 255, 0.08); 
        }
        .auth-card {
            border-radius: 2rem;
            animation: slideUp 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
        }
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .input-field {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .input-field:focus {
            border-color: var(--primary);
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 0 20px rgba(16, 185, 129, 0.1);
        }
        .btn-premium {
            background: var(--primary);
            color: #000;
            box-shadow: 0 10px 30px var(--primary-glow);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .btn-premium:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 40px var(--primary-glow);
        }
    </style>
</head>
<body class="min-h-screen flex flex-col items-center justify-center p-6 bg-cover bg-center" style="background-image: linear-gradient(rgba(5,5,5,0.9), rgba(5,5,5,0.9)), url('{{ asset('images/hero_bg.jpg') }}');">
    
    <div class="w-full max-w-[440px] z-10">
        <div class="glass auth-card overflow-hidden">
            <div class="p-10 pb-8">
                <div class="text-center mb-10">
                    <img src="{{ asset('images/logo.png') }}" class="h-12 w-12 mx-auto mb-6 grayscale brightness-200 opacity-80" alt="Logo">
                    <h1 class="text-2xl font-bold font-syne tracking-tight mb-2 uppercase italic">Initialize <span class="text-emerald-500">Portal</span></h1>
                    <p class="text-[0.85rem] text-gray-500 font-medium">Join the elite collector sanctuary.</p>
                </div>

                <!-- Social Register -->
                <a href="{{ route('google.login') }}" class="w-full flex items-center justify-center space-x-3 px-4 py-3 bg-white/5 border border-white/10 rounded-xl hover:bg-white/10 transition-all mb-6 text-[0.85rem] font-bold uppercase tracking-widest text-gray-300">
                    <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" class="w-4 h-4 opacity-70" alt="Google">
                    <span>Sign up with Google</span>
                </a>

                <div class="relative flex items-center mb-8">
                    <div class="flex-grow border-t border-white/5"></div>
                    <span class="flex-shrink mx-4 text-gray-600 text-[10px] uppercase font-bold tracking-[0.3em]">or</span>
                    <div class="flex-grow border-t border-white/5"></div>
                </div>

                <form action="{{ route('register') }}" method="POST" class="space-y-4">
                    @csrf
                    
                    <div class="space-y-2">
                        <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-500 ml-1">Full Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" required autofocus
                            class="input-field w-full px-5 py-4 rounded-xl outline-none text-[0.9rem] text-white placeholder-gray-600" 
                            placeholder="Artisan Collector">
                        @error('name')
                            <p class="text-emerald-500 text-[10px] mt-1 ml-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-500 ml-1">Identity (Email)</label>
                        <input type="email" name="email" value="{{ old('email') }}" required
                            class="input-field w-full px-5 py-4 rounded-xl outline-none text-[0.9rem] text-white placeholder-gray-600" 
                            placeholder="your@sanctuary.com">
                        @error('email')
                            <p class="text-emerald-500 text-[10px] mt-1 ml-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-500 ml-1">Access Key</label>
                        <input type="password" name="password" required 
                            class="input-field w-full px-5 py-4 rounded-xl outline-none text-[0.9rem] text-white placeholder-gray-600" 
                            placeholder="••••••••">
                        @error('password')
                            <p class="text-emerald-500 text-[10px] mt-1 ml-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-500 ml-1">Confirm Access Key</label>
                        <input type="password" name="password_confirmation" required 
                            class="input-field w-full px-5 py-4 rounded-xl outline-none text-[0.9rem] text-white placeholder-gray-600" 
                            placeholder="••••••••">
                    </div>

                    <button type="submit" class="btn-premium w-full py-4.5 text-[0.85rem] font-extrabold uppercase tracking-[0.2em] rounded-xl flex items-center justify-center space-x-2 mt-4">
                        <span>Initialize</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </form>
            </div>

            <div class="px-10 py-6 bg-white/5 border-t border-white/5 text-center">
                <p class="text-[0.75rem] text-gray-500 font-medium uppercase tracking-widest">
                    Already recognized? 
                    <a href="{{ route('login') }}" class="text-emerald-500 font-bold hover:underline ml-1">Return to Sign In</a>
                </p>
            </div>

            <div class="px-10 py-8 text-center bg-black/20">
                <div class="flex flex-col items-center space-y-3">
                    <p class="text-[9px] text-gray-600 font-bold uppercase tracking-[0.3em]">Architected by <span class="text-gray-400">Snakehead Core</span></p>
                    <div class="px-3 py-1 bg-emerald-500/10 border border-emerald-500/20 rounded-full">
                        <p class="text-[8px] font-black text-emerald-500 uppercase tracking-[0.2em]">Deployment Ready</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 text-center flex items-center justify-center space-x-4">
            <a href="{{ route('home') }}" class="text-[0.7rem] font-bold uppercase tracking-widest text-gray-600 hover:text-emerald-500 transition-colors">← Return Home</a>
            <span class="text-gray-800">|</span>
            <span class="text-[0.7rem] font-bold uppercase tracking-widest text-gray-700">v2.4.1</span>
        </div>
    </div>
    
    <!-- Decor Elements -->
    <div class="fixed top-0 right-0 w-[600px] h-[600px] bg-emerald-500/5 rounded-full blur-[150px] -mr-96 -mt-96 pointer-events-none"></div>
    <div class="fixed bottom-0 left-0 w-[600px] h-[600px] bg-emerald-500/5 rounded-full blur-[150px] -ml-96 -mb-96 pointer-events-none"></div>
</body>
</html>
