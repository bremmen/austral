<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Austral Software</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:200,400,600,800|outfit:300,500,700&display=swap" rel="stylesheet" />

    <!-- Scripts and Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #030a16; /* Deep ocean/night sky blue */
            color: #ffffff;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Outfit', sans-serif;
        }
        /* Austral inspired custom gradient */
        .bg-austral {
            background: linear-gradient(135deg, #021124 0%, #11344f 50%, #2f6982 100%);
        }
        .text-gradient {
            background: linear-gradient(to right, #87CEFA, #E0FFFF);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .glass-panel {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .ice-glow {
            box-shadow: 0 0 20px rgba(135, 206, 250, 0.3);
        }
        
        /* Subtle float animation */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        .floating {
            animation: float 6s ease-in-out infinite;
        }
        .delay-1 { animation-delay: 1s; }
        .delay-2 { animation-delay: 2s; }
        .delay-3 { animation-delay: 3s; }
    </style>
</head>
<body class="antialiased selection:bg-cyan-500 selection:text-white relative overflow-x-hidden">

    <header class="absolute top-0 w-full z-50">
        <nav class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold tracking-tighter flex items-center gap-2">
                <svg class="w-8 h-8 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                <span>AUSTRAL<span class="text-gray-400 font-light">DEV</span></span>
            </div>
            <div>
                @if (Route::has('login'))
                    <div class="space-x-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm font-medium text-gray-300 hover:text-white transition">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm font-medium text-gray-300 hover:text-white transition">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-sm font-medium px-4 py-2 rounded-full bg-white/10 hover:bg-white/20 border border-white/20 transition backdrop-blur-md">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="relative min-h-screen flex items-center justify-center bg-austral pt-20">
            <!-- Decorative mountain/glacier shapes using SVGs -->
            <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-0">
                <svg class="relative block w-full h-[150px] md:h-[300px]" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M0,0 L1200,0 L1200,120 L0,120 Z" fill="#030a16"></path>
                    <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" fill="rgba(255,255,255, 0.02)"></path>
                    <path d="M0 120L1200 40 1200 0 0 0 0 1200z" fill="rgba(8, 25, 45, 0.5)"></path>
                    <path d="M0 120L600 20 1200 80 1200 0 0 0z" fill="rgba(47, 105, 130, 0.3)"></path>
                </svg>
            </div>

            <div class="relative z-10 max-w-7xl mx-auto px-6 flex flex-col items-center text-center">
                <div class="inline-block px-4 py-1.5 rounded-full border border-cyan-500/30 bg-cyan-500/10 text-cyan-300 text-sm font-medium mb-6 backdrop-blur-md animate-pulse">
                    Desarrollo de Software para Pymes
                </div>
                <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6 leading-tight">
                    Impulsa tu negocio al <br/>
                    <span class="text-gradient">Siguiente Nivel</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-300 max-w-2xl mb-10 font-light">
                    Soluciones tecnológicas inspiradas en la inmensidad del sur. Transparentes, robustas y adaptadas a las necesidades de tu empresa.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#services" class="px-8 py-4 rounded-full bg-cyan-500 hover:bg-cyan-400 text-gray-900 font-bold transition transform hover:-translate-y-1 ice-glow text-lg">
                        Explorar Servicios
                    </a>
                    <a href="#" class="px-8 py-4 rounded-full bg-transparent hover:bg-white/5 border border-white/20 transition text-lg font-medium">
                        Contactar Ahora
                    </a>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="py-24 relative z-10">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-5xl font-bold mb-4">Nuestros Servicios</h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-cyan-500 to-blue-500 mx-auto rounded-full mb-6"></div>
                    <p class="text-gray-400 max-w-2xl mx-auto text-lg">Descubre las herramientas digitales que diseñamos para potenciar tu presencia online y optimizar tus procesos.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    @foreach($services as $index => $service)
                        <div class="glass-panel p-8 rounded-2xl hover:bg-white/10 transition duration-300 transform hover:-translate-y-2 group floating delay-{{ $index % 4 }}">
                            <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-cyan-400/20 to-blue-600/20 flex items-center justify-center text-cyan-400 mb-6 group-hover:scale-110 group-hover:text-cyan-300 transition-all duration-300 border border-cyan-500/20">
                                {!! $service->icon !!}
                            </div>
                            <h3 class="text-xl font-bold mb-3 text-white">{{ $service->title }}</h3>
                            <p class="text-gray-400 text-sm leading-relaxed mb-6">{{ $service->description }}</p>
                            @if($service->image_url)
                                <img src="{{ $service->image_url }}" alt="{{ $service->title }}" class="w-full h-32 object-cover rounded-lg mb-4 opacity-80 group-hover:opacity-100 transition">
                            @endif
                            <a href="#" class="inline-flex items-center text-sm font-medium text-cyan-400 hover:text-cyan-300 transition group-hover:translate-x-1 duration-300">
                                Saber más
                                <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        
        <!-- Call to Action -->
        <section class="py-20 relative">
            <div class="absolute inset-0 bg-blue-900/20"></div>
            <div class="max-w-4xl mx-auto px-6 text-center relative z-10 glass-panel rounded-3xl p-12 border border-blue-500/30">
                <h2 class="text-3xl font-bold mb-4">¿Listo para transformar tu visión en realidad?</h2>
                <p class="text-gray-300 mb-8 max-w-xl mx-auto">Únete a cientos de empresas que ya han experimentado la solidez y el diseño de nuestras soluciones.</p>
                <a href="#" class="px-8 py-3 rounded-full bg-white text-blue-900 font-bold hover:bg-gray-200 transition">Comenzar Proyecto</a>
            </div>
        </section>
    </main>

    <footer class="border-t border-white/10 bg-[#020610] pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
            <div class="col-span-1 md:col-span-2">
                <div class="text-2xl font-bold tracking-tighter flex items-center gap-2 mb-4">
                    <svg class="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    <span>AUSTRAL<span class="text-gray-400 font-light">DEV</span></span>
                </div>
                <p class="text-gray-400 text-sm max-w-sm">
                    Construyendo el futuro digital desde el sur hacia el mundo. Soluciones robustas, como el hielo milenario.
                </p>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-4">Enlaces</h4>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li><a href="#" class="hover:text-cyan-400 transition">Inicio</a></li>
                    <li><a href="#services" class="hover:text-cyan-400 transition">Servicios</a></li>
                    <li><a href="#" class="hover:text-cyan-400 transition">Proyectos</a></li>
                    <li><a href="#" class="hover:text-cyan-400 transition">Contacto</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-4">Legal</h4>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li><a href="#" class="hover:text-cyan-400 transition">Privacidad</a></li>
                    <li><a href="#" class="hover:text-cyan-400 transition">Términos</a></li>
                </ul>
            </div>
        </div>
        <div class="text-center text-gray-500 text-xs border-t border-white/10 pt-8 max-w-7xl mx-auto px-6">
            &copy; {{ date('Y') }} Austral Software. Todos los derechos reservados.
        </div>
    </footer>

</body>
</html>
