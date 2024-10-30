<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pueblo Mágico Teapa</title>
    @vite('resources/css/app.css') <!-- Tailwind CSS -->
    <style>
        /* Animación personalizada para el botón */
        .btn-comenzar {
            background: linear-gradient(90deg, rgba(255, 165, 0, 1) 0%, rgba(255, 99, 71, 1) 50%, rgba(255, 165, 0, 1) 100%);
            color: #fff;
            padding: 12px 24px;
            border-radius: 50px;
            font-weight: bold;
            font-size: 1.2rem;
            text-transform: uppercase;
            position: relative;
            overflow: hidden;
            transition: all 0.4s ease;
        }

        .btn-comenzar:hover {
            box-shadow: 0 0 20px rgba(255, 99, 71, 0.7);
            transform: translateY(-5px) scale(1.1);
            background-position: 100% 50%;
        }

        .btn-comenzar::before {
            content: '';
            position: absolute;
            top: 0;
            left: -50%;
            width: 200%;
            height: 100%;
            background: rgba(255, 255, 255, 0.3);
            transform: skewX(-20deg);
            transition: all 0.4s ease;
        }

        .btn-comenzar:hover::before {
            left: 150%;
        }

        /* Zoom y sombra en imágenes */
        .hover-zoom:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        /* Estilo para la transición de la información */
        .grupo {
            position: relative;
            overflow: hidden;
        }

        .grupo img {
            transition: transform 0.4s ease;
        }

        .grupo:hover img {
            transform: scale(1.1);
        }

        /* Extender el fondo y el texto a todo el contenedor de la imagen */
        .concepto {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(255, 255, 255, 0); /* Fondo transparente inicialmente */
            color: white;
            text-align: center;
            opacity: 0;
            transition: all 0.4s ease;
            padding: 10px;
        }

        .grupo:hover .concepto {
            background-color: rgba(255, 255, 255, 0.7); /* Fondo blanco translúcido al hacer hover */
            color: #000; /* Cambia el color del texto a negro para mejor visibilidad */
            opacity: 1;
        }

        /* Transición en los textos */
        .grupo p {
            transition: opacity 0.4s ease;
        }

        .grupo:hover p.uppercase {
            opacity: 0;
        }
    </style>
</head>

<body class="font-sans antialiased text-gray-900">
    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center py-4">
            <div class="flex items-center space-x-6"> <!-- Menú Izquierda -->
                <img src="{{ asset('img/logoTeapa.png') }}" alt="Logo" class="w-20 h-16 rounded-full hover:scale-110 transition duration-300">
                <nav class="flex space-x-4">
                    <a href="#" class="text-gray-800 hover:text-yellow-300 uppercase font-semibold transition duration-300">Inicio</a>
                    <a href="#" class="text-gray-800 hover:text-yellow-300 uppercase font-semibold transition duration-300">Nosotros</a>
                </nav>
            </div>
            <div class="space-x-4"> <!-- Menú Derecha -->
                <a href="#" class="text-gray-800 hover:text-yellow-300 uppercase font-semibold transition duration-300">Login</a>
                <a href="#" class="bg-yellow-400 text-indigo-900 hover:bg-yellow-300 py-2 px-4 rounded-full uppercase font-semibold transition duration-300">Registrarse</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r text-white py-20">
        <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between space-y-10 lg:space-y-0 lg:space-x-12">
            <div class="lg:w-1/2 text-center lg:text-left">
                <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6">Descubre el Pueblo Mágico Teapa</h1>
                <p class="text-lg mb-8">Construye interfaces modernas con facilidad. Optimizado para todas las pantallas.</p>
                <a href="#" class="btn-comenzar">Comenzar</a>
            </div>
            <div class="lg:w-1/2">
                <img src="{{ asset('zona.png') }}" alt="hero" class="rounded-xl shadow-2xl hover:scale-110 transition duration-300">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold mb-12 text-indigo-900">Nuestras Artesanías</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 justify-center">
                <!-- Grupo 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col justify-center items-center grupo transition duration-300">
                    <img class="w-32 h-32 mb-4 rounded-lg mx-auto" src="{{ asset('img/palma.jpg') }}" alt="Sombrero de palma">
                    <p class="uppercase font-bold text-indigo-900">Sombrero de Palma</p>
                    <div class="concepto">Hecho con palma natural de la región.</div>
                </div>

                <!-- Grupo 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col justify-center items-center grupo transition duration-300">
                    <img class="w-32 h-32 mb-4 rounded-lg mx-auto" src="{{ asset('img/artesania.jpeg') }}" alt="Cerámica">
                    <p class="uppercase font-bold text-indigo-900">Cerámica</p>
                    <div class="concepto">Piezas artesanales de cerámica fina.</div>
                </div>

                <!-- Grupo 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col justify-center items-center grupo transition duration-300">
                    <img class="w-32 h-32 mb-4 rounded-lg mx-auto" src="{{ asset('img/textiles.jpg') }}" alt="Textiles">
                    <p class="uppercase font-bold text-indigo-900">Textiles</p>
                    <div class="concepto">Tejidos con técnicas tradicionales.</div>
                </div>

                <!-- Grupo 4 -->
                <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col justify-center items-center grupo transition duration-300">
                    <img class="w-32 h-32 mb-4 rounded-lg mx-auto" src="{{ asset('img/cestos.jfif') }}" alt="Cestos">
                    <p class="uppercase font-bold text-indigo-900">Cestos</p>
                    <div class="concepto">Cestas tejidas a mano.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <x-comments />

</body>

</html>
