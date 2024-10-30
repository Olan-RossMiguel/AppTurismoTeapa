<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pueblo Mágico Teapa</title>

    @vite('resources/css/app.css')

    <style>
        /* Opciones de estilo adicionales */
        .hover-zoom:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .concepto {
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .grupo:hover .concepto {
            background-color: rgba(255, 255, 255, 0.8);
            color: #1a202c;
            opacity: 1;
        }
    </style>
</head>

<body class="antialiased bg-gray-100 text-gray-800">
    <!-- Contenedor principal -->
    <div class="relative flex flex-col min-h-screen">

        <!-- Encabezado de acceso -->
        @if (Route::has('login'))
            <div class="fixed top-0 right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-lg text-teal-700 hover:text-teal-900">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-lg text-teal-700 hover:text-teal-900">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-lg text-teal-700 hover:text-teal-900">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <!-- Sección de bienvenida -->
        <section class="flex items-center justify-center bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 py-20">
            <div class="container mx-auto flex flex-col lg:flex-row items-center space-y-10 lg:space-y-0 lg:space-x-12">
                <div class="lg:w-1/2 text-center lg:text-left">
                    <h1 class="text-4xl md:text-6xl font-bold text-white leading-tight mb-6">Descubre el encanto de Teapa</h1>
                    <p class="text-lg text-white mb-8">Explora la belleza y tradición de nuestro pueblo mágico con una plataforma fácil de usar.</p>
                    <a href="#" class="bg-pink-500 hover:bg-indigo-500 text-white font-bold py-3 px-6 rounded-full transition-all duration-300 shadow-lg hover:shadow-2xl transform hover:scale-105">Comenzar</a>
                </div>
                <div class="lg:w-1/2">
                    <img src="{{ asset('zona.png') }}" alt="Imagen de Teapa" class="rounded-lg shadow-lg hover:scale-105 transition-all duration-300">
                </div>
            </div>
        </section>

        <!-- Sección de artesanías -->
        <section class="py-16 bg-white">
            <div class="container mx-auto text-center">
                <h2 class="text-3xl font-semibold mb-12 text-indigo-600">Nuestras Artesanías</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Sombrero de Palma -->
                    <div class="bg-gray-50 p-6 rounded-lg shadow-lg grupo hover-zoom">
                        <img class="w-32 h-32 mb-4 rounded-lg mx-auto" src="{{ asset('img/palma.jpg') }}" alt="Sombrero de Palma">
                        <p class="uppercase font-bold text-indigo-800">Sombrero de Palma</p>
                        <div class="concepto bg-opacity-0 text-white text-sm p-2">Hecho con palma natural de la región.</div>
                    </div>

                    <!-- Cerámica -->
                    <div class="bg-gray-50 p-6 rounded-lg shadow-lg grupo hover-zoom">
                        <img class="w-32 h-32 mb-4 rounded-lg mx-auto" src="{{ asset('img/artesania.jpeg') }}" alt="Cerámica">
                        <p class="uppercase font-bold text-indigo-800">Cerámica</p>
                        <div class="concepto bg-opacity-0 text-white text-sm p-2">Piezas artesanales de cerámica fina.</div>
                    </div>

                    <!-- Textiles -->
                    <div class="bg-gray-50 p-6 rounded-lg shadow-lg grupo hover-zoom">
                        <img class="w-32 h-32 mb-4 rounded-lg mx-auto" src="{{ asset('img/textiles.jpg') }}" alt="Textiles">
                        <p class="uppercase font-bold text-indigo-800">Textiles</p>
                        <div class="concepto bg-opacity-0 text-white text-sm p-2">Tejidos con técnicas tradicionales.</div>
                    </div>

                    <!-- Cestos -->
                    <div class="bg-gray-50 p-6 rounded-lg shadow-lg grupo hover-zoom">
                        <img class="w-32 h-32 mb-4 rounded-lg mx-auto" src="{{ asset('img/cestos.jfif') }}" alt="Cestos">
                        <p class="uppercase font-bold text-indigo-800">Cestos</p>
                        <div class="concepto bg-opacity-0 text-white text-sm p-2">Cestas tejidas a mano.</div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <x-comments />
</body>
</html>
