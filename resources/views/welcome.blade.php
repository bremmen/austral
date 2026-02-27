<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Austral Studio</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>❄️</text></svg>">

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
        
        /* Snow Animation */
        .snowflake {
            position: fixed;
            top: -10vh;
            color: #fff;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
            pointer-events: none;
            z-index: 9999;
            animation: fall linear infinite, sway ease-in-out infinite alternate;
        }
        @keyframes fall {
            100% { top: 110vh; }
        }
        @keyframes sway {
            0% { transform: translateX(0px) rotate(0deg); }
            100% { transform: translateX(20px) rotate(45deg); }
        }
        
        /* WhatsApp Pulse Animation */
        @keyframes pulse-whatsapp {
            0% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.8); }
            70% { box-shadow: 0 0 0 25px rgba(37, 211, 102, 0); }
            100% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0); }
        }
        .btn-whatsapp {
            animation: pulse-whatsapp 2.5s infinite;
        }
        .btn-whatsapp:hover {
            animation: none;
            box-shadow: 0 0 30px rgba(37, 211, 102, 0.8);
            transform: scale(1.05);
        }
    </style>
</head>
<body class="antialiased selection:bg-cyan-500 selection:text-white relative overflow-x-hidden">

    <header class="absolute top-0 w-full z-50">
        <nav class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold tracking-tighter flex items-center gap-2">
                <!-- <x-application-logo class="w-8 h-8 text-cyan-400" /> -->
                <span>AUSTRAL<span class="text-gray-400 font-light">STUDIO</span></span>
            </div>
            <div>
                @if (Route::has('login'))
                    <div class="space-x-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm font-medium text-gray-300 hover:text-white transition">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm font-medium text-gray-300 hover:text-white transition">Log in</a>
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
                @if(request()->query('t') === 'professional')
                    <div class="inline-block px-4 py-1.5 rounded-full border border-cyan-500/30 bg-cyan-500/10 text-cyan-300 text-sm font-medium mb-6 backdrop-blur-md animate-pulse">
                        Desarrollo de Portafolios y Web para Profesionales
                    </div>
                    <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6 leading-tight drop-shadow-[0_0_15px_rgba(255,255,255,0.3)]">
                        Destaca tu perfil en la <br/>
                        <span class="text-gradient">Cima del Fitz Roy</span>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-300 max-w-2xl mb-10 font-light">
                        Creemos en el talento. Soluciones ágiles, portfolios impecables y sitios personales para destacar tu trayectoria frente al mundo.
                    </p>
                @else
                    <div class="inline-block px-4 py-1.5 rounded-full border border-cyan-500/30 bg-cyan-500/10 text-cyan-300 text-sm font-medium mb-6 backdrop-blur-md animate-pulse">
                        Desarrollo de Software para Pymes
                    </div>
                    <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6 leading-tight drop-shadow-[0_0_15px_rgba(255,255,255,0.3)]">
                        Impulsa tu negocio a la <br/>
                        <span class="text-gradient">Cima del Fitz Roy</span>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-300 max-w-2xl mb-10 font-light">
                        Software tan robusto como nuestros glaciares, ágil como el viento pampero y adaptado a tus necesidades.
                    </p>
                @endif
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#services" class="px-8 py-4 rounded-full bg-cyan-500 hover:bg-cyan-400 text-gray-900 font-bold transition transform hover:-translate-y-1 ice-glow text-lg">
                        Explorar Servicios
                    </a>
                    <a href="https://wa.me/59899426762?text=Hola,%20me%20interesa%20conocer%20m%C3%A1s%20sobre%20los%20servicios" target="_blank" rel="noopener noreferrer" class="px-8 py-4 rounded-full bg-transparent hover:bg-white/5 border border-white/20 transition text-lg font-medium">
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

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
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
                            @if($service->link_url)
                                <a href="{{ $service->link_url }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center text-sm font-medium text-cyan-400 hover:text-cyan-300 transition group-hover:translate-x-1 duration-300">
                                    Saber más
                                    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                </a>
                            @endif
                        </div>
                    @endforeach
                </div>
                
                <!-- Added Value Banner -->
                <div class="mt-16 p-8 rounded-2xl bg-gradient-to-r from-cyan-900/30 to-blue-900/30 border border-cyan-500/30 flex flex-col md:flex-row items-center gap-6 glass-panel transform transition duration-500 hover:scale-[1.01]">
                    <div class="w-14 h-14 rounded-full bg-cyan-500/20 flex items-center justify-center text-cyan-400 flex-shrink-0 border border-cyan-500/40">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-white mb-2">Todo Incluido en tu Proyecto</h4>
                        <p class="text-gray-300 text-base leading-relaxed">
                            Sin dolores de cabeza. Todos nuestros servicios de desarrollo incluyen <strong class="text-cyan-400 font-semibold">Hosting</strong>, registro de <strong class="text-cyan-400 font-semibold">Dominio Gratuito</strong> y cuentas de <strong class="text-cyan-400 font-semibold">Email Corporativo</strong> personalizadas (<span class="text-blue-300 italic">tu@tuempresa.com</span>).
                        </p>
                    </div>
                </div>

            </div>
        </section>
        
        <!-- Call to Action -->
        <section class="py-20 relative">
            <div class="absolute inset-0 bg-blue-900/20"></div>
            <div class="max-w-4xl mx-auto px-6 text-center relative z-10 glass-panel rounded-3xl p-12 border border-blue-500/30">
                <h2 class="text-3xl font-bold mb-4">¿Preparado para desafiar el hielo?</h2>
                <p class="text-gray-300 mb-8 max-w-xl mx-auto">Únete a cientos de expedicionarios que ya han llevado sus empresas a lo más alto confiando en nuestra tecnología austral.</p>
                <a href="https://wa.me/59899426762?text=Hola,%20me%20gustar%C3%ADa%20comenzar%20un%20proyecto%20web" target="_blank" rel="noopener noreferrer" class="btn-whatsapp inline-flex items-center gap-3 px-10 py-5 rounded-full bg-gradient-to-r from-[#20B054] to-[#25D366] text-white text-lg font-bold transition-all duration-300 relative overflow-hidden group">
                    <div class="absolute inset-0 w-full h-full bg-white/20 -translate-x-full group-hover:translate-x-0 transition-transform duration-500 ease-out z-0"></div>
                    <svg class="w-7 h-7 relative z-10" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.888-.788-1.489-1.761-1.663-2.06-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></svg>
                    <span class="relative z-10">Comenzar un Proyecto</span>
                </a>
            </div>
        </section>
    </main>

    <footer class="border-t border-white/10 bg-[#020610] pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
            <div class="col-span-1 md:col-span-2">
                <div class="text-2xl font-bold tracking-tighter flex items-center gap-2 mb-4">
                    <!-- <x-application-logo class="w-6 h-6 text-cyan-400" /> -->
                    <span>AUSTRAL<span class="text-gray-400 font-light">STUDIO</span></span>
                </div>
                <p class="text-gray-400 text-sm max-w-sm mb-4">
                    Construyendo el futuro digital desde el sur hacia el mundo. ⛄️
                </p>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-4">Enlaces</h4>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li><a href="#" class="hover:text-cyan-400 transition">Inicio</a></li>
                    <li><a href="#services" class="hover:text-cyan-400 transition">Servicios</a></li>
                    <li><a href="#" class="hover:text-cyan-400 transition">Contacto</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-4">Contacto</h4>
                <ul class="space-y-3 text-sm text-gray-400">
                    <li>
                        <a href="mailto:hola@austral.studio" class="hover:text-cyan-400 flex items-center gap-2 transition w-max">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            hola@austral.studio
                        </a>
                    </li>
                    <li>
                        <a href="https://wa.me/59899426762" class="hover:text-cyan-400 flex items-center gap-2 transition w-max" target="_blank" rel="noopener noreferrer">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.888-.788-1.489-1.761-1.663-2.06-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></svg>
                            +598 99 426 762
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-4">Medios de Pago</h4>
                <div class="flex items-center gap-3 bg-white/5 border border-white/10 px-4 py-3 rounded-xl w-max hover:bg-white/10 transition-colors duration-300">
                    <div class="bg-[#009EE3] p-1.5 rounded-lg shadow-[0_0_15px_rgba(0,158,227,0.4)] flex-shrink-0">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-[0.6rem] text-gray-400 font-semibold uppercase tracking-widest leading-none mb-1">PAGÁ EN CUOTAS CON</span>
                        <span class="text-white font-bold tracking-tight leading-none text-base">mercado<span class="font-light">pago</span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center text-gray-500 text-xs border-t border-white/10 pt-8 max-w-7xl mx-auto px-6">
            &copy; {{ date('Y') }} Austral Studio. Todos los derechos reservados.
        </div>
    </footer>

    <script>
        // Snow generation
        const generateSnow = () => {
            const snowflake = document.createElement('div');
            // Fun variety of snow characters
            const snowIcons = ['❄', '❅', '❆', '•', '·'];
            snowflake.innerHTML = snowIcons[Math.floor(Math.random() * snowIcons.length)];
            snowflake.classList.add('snowflake');
            document.body.appendChild(snowflake);

            const size = Math.random() * 1.5 + 0.5;
            const startLeft = Math.random() * 100;
            const animationDurationFall = Math.random() * 8 + 6; // 6 to 14s
            const animationDurationSway = Math.random() * 3 + 2; // 2 to 5s
            const opacity = Math.random() * 0.6 + 0.2;

            snowflake.style.left = `${startLeft}vw`;
            snowflake.style.fontSize = `${size}rem`;
            snowflake.style.opacity = opacity;
            snowflake.style.animationDuration = `${animationDurationFall}s, ${animationDurationSway}s`;

            // Remove snowflake when it's totally out of bounds
            setTimeout(() => {
                snowflake.remove();
            }, animationDurationFall * 1000);
        };

        // Create a gentle blizzard (every 200 ms)
        setInterval(generateSnow, 200);
    </script>
</body>
</html>
