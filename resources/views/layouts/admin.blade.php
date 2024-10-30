<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema CRUD</title>
    @vite('resources/css/app.css')
</head>

<body>
        <!-- Barra de navegación -->
        <nav class="bg-gray-800 p-4">
            <div class="container mx-auto flex justify-between items-center">
                <!-- Logo o Nombre -->
                <a href="#" class="text-white font-bold text-xl">Administrador</a>
                <!-- Menú -->
                <div class="flex space-x-4">
                    <a href="/CRUD/crear"
                        class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Insertar</a>
                    <a href="/CRUD/consultar"
                        class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Consultar</a>
                    
                </div>
            </div>
            
        </nav>
    <div >
        @yield('content')
    </div>
</body>

</html>
