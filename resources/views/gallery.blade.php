<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery - Snakehead Culture</title>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
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
            overflow-x: hidden;
        }
        h1, h2, h3, .font-syne { font-family: 'Syne', sans-serif; }
        
        .glass { 
            background: rgba(255, 255, 255, 0.03); 
            backdrop-filter: blur(20px); 
            border: 1px solid rgba(255, 255, 255, 0.08); 
        }
    </style>
</head>
<body class="antialiased">
    <!-- Navigation -->
    <nav id="mainNav" class="fixed w-full z-50 px-6 py-6 items-center flex justify-center transition-transform duration-500 ease-in-out">
        <div class="max-w-7xl w-full glass rounded-full px-8 py-4 flex justify-between items-center border-white/10">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logo.png') }}" class="h-10 w-10 object-contain" alt="Logo">
                <span class="text-xl font-bold tracking-tighter uppercase font-syne italic">Snakehead <span class="text-emerald-500">Culture</span></span>
            </div>
            <div class="flex items-center space-x-6">
                <a href="{{ route('home') }}" class="text-sm text-emerald-400 hover:underline">Back to Home</a>
            </div>
        </div>
    </nav>

    <!-- Gallery Section -->
    <section class="min-h-screen pt-32 pb-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h1 class="text-4xl md:text-6xl font-bold font-syne tracking-tight mb-4">
                    Our <span class="text-emerald-500 italic">Gallery</span>
                </h1>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                    Explore our collection of premium Channa specimens through our curated video gallery
                </p>
            </div>

            <!-- Interactive Video Gallery -->
            <div class="max-w-6xl mx-auto">
                <!-- Main Player -->
                <div class="glass rounded-3xl p-4 md:p-8 mb-8">
                    <div class="aspect-video w-full bg-black/50 rounded-2xl overflow-hidden shadow-2xl relative group">
                         <video id="mainPlayer" controls poster="{{ asset('images/hero.png') }}" class="w-full h-full object-cover">
                            <source src="{{ asset('images/gallery-video.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="mt-6 text-center">
                        <h3 id="videoTitle" class="text-xl md:text-3xl font-bold font-syne text-white mb-2">Premium Channa Collection</h3>
                        <p id="videoSubtitle" class="text-emerald-400 font-medium tracking-wide">Channa Auranti</p>
                    </div>
                </div>

                <!-- Playlist Grid -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <!-- Main Video Thumbnail -->
                    <button onclick="playVideo('{{ asset('images/gallery-video.mp4') }}', 'Premium Channa Collection', 'Channa Auranti')" 
                            class="group relative aspect-video rounded-xl overflow-hidden border border-white/10 hover:border-emerald-500 transition-all duration-300 bg-black/40">
                        <img src="{{ asset('images/thumb-main.png') }}" class="w-full h-full object-cover opacity-60 group-hover:opacity-100 transition-opacity" alt="Channa Auranti">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-10 h-10 rounded-full bg-emerald-500/80 flex items-center justify-center group-hover:scale-110 transition-transform shadow-lg">
                                <svg class="w-5 h-5 text-white pl-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            </div>
                        </div>
                        <div class="absolute bottom-2 left-2 right-2 text-xs text-white font-medium truncate opacity-0 group-hover:opacity-100 transition-opacity">Channa Auranti</div>
                    </button>

                    <!-- Video 1 -->
                    <button onclick="playVideo('{{ asset('images/video-1.mp4') }}', 'Elegant & Fierce', 'The Beauty of Movement')" 
                            class="group relative aspect-video rounded-xl overflow-hidden border border-white/10 hover:border-emerald-500 transition-all duration-300 bg-black/40">
                        <img src="{{ asset('images/thumb-1.png') }}" class="w-full h-full object-cover opacity-60 group-hover:opacity-100 transition-opacity" alt="The Beauty of Movement">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center group-hover:bg-emerald-500 transition-colors shadow-lg">
                                <svg class="w-5 h-5 text-white pl-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            </div>
                        </div>
                        <div class="absolute bottom-2 left-2 right-2 text-xs text-white font-medium truncate opacity-0 group-hover:opacity-100 transition-opacity">The Beauty of Movement</div>
                    </button>
                    
                    <!-- Video 2 -->
                     <button onclick="playVideo('{{ asset('images/video-2.mp4') }}', 'High Value', 'Pride of the Owner')" 
                            class="group relative aspect-video rounded-xl overflow-hidden border border-white/10 hover:border-emerald-500 transition-all duration-300 bg-black/40">
                        <img src="{{ asset('images/thumb-2.png') }}" class="w-full h-full object-cover opacity-60 group-hover:opacity-100 transition-opacity" alt="Pride of the Owner">
                       <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center group-hover:bg-emerald-500 transition-colors shadow-lg">
                                <svg class="w-5 h-5 text-white pl-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            </div>
                        </div>
                        <div class="absolute bottom-2 left-2 right-2 text-xs text-white font-medium truncate opacity-0 group-hover:opacity-100 transition-opacity">Pride of the Owner</div>
                    </button>

                    <!-- Video 3 -->
                     <button onclick="playVideo('{{ asset('images/video-3.mp4') }}', 'Character & Patience', 'Learning from Channa')" 
                            class="group relative aspect-video rounded-xl overflow-hidden border border-white/10 hover:border-emerald-500 transition-all duration-300 bg-black/40">
                        <img src="{{ asset('images/thumb-3.png') }}" class="w-full h-full object-cover opacity-60 group-hover:opacity-100 transition-opacity" alt="Learning from Channa">
                       <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center group-hover:bg-emerald-500 transition-colors shadow-lg">
                                <svg class="w-5 h-5 text-white pl-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            </div>
                        </div>
                        <div class="absolute bottom-2 left-2 right-2 text-xs text-white font-medium truncate opacity-0 group-hover:opacity-100 transition-opacity">Learning from Channa</div>
                    </button>
                </div>
            </div>

            <script>
                function playVideo(src, title, subtitle) {
                    const video = document.getElementById('mainPlayer');
                    const titleEl = document.getElementById('videoTitle');
                    const subtitleEl = document.getElementById('videoSubtitle');
                    
                    // Update content immediately
                    video.src = src;
                    titleEl.innerText = title;
                    subtitleEl.innerText = subtitle;
                    
                    // FORCE UNMUTE & MAX VOLUME
                    video.muted = false;
                    video.volume = 1.0;
                    
                    // Play immediately (without timeout) to keep user interaction context
                    var playPromise = video.play();

                    if (playPromise !== undefined) {
                        playPromise.then(_ => {
                            // Automatic playback started!
                            console.log("Video playing with sound");
                        })
                        .catch(error => {
                            console.log("Autoplay prevented: " + error);
                        });
                    }
                    
                    // Smooth scroll to top of player if needed on mobile
                    if(window.innerWidth < 768) {
                        video.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                }

                // Force unmute on initial load too if user clicks play manually
                document.addEventListener('DOMContentLoaded', (event) => {
                    const video = document.getElementById('mainPlayer');
                    video.onplay = function() {
                        video.muted = false;
                        video.volume = 1.0;
                    };
                });
            </script>
        </div>
    </section>

    <script>
        // Smart Navbar Logic
        (function() {
            const nav = document.getElementById('mainNav');
            let lastScrollY = window.scrollY;

            window.addEventListener('scroll', () => {
                if (window.scrollY > lastScrollY && window.scrollY > 100) {
                    nav.style.transform = 'translateY(-120%)';
                } else {
                    nav.style.transform = 'translateY(0)';
                }
                lastScrollY = window.scrollY;
            });
        })();
    </script>

    @include('partials.footer', ['hideFooterFeatures' => true, 'hideFooterMenus' => true, 'hideFloatingWidget' => true])
</body>
</html>
