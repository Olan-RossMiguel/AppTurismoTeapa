@extends('layouts.admin')
@section('content')
    <div class="max-w-7xl mx-auto py-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-10">Listado de Hoteles</h1>

        <p class="text-center text-gray-600 mb-6">
            Bienvenido al listado de hoteles. Aquí puedes ver la información, actualizar o eliminar registros.
        </p>

        <div class="flex justify-center space-x-4 mb-8">
            <a href="{{ route('CRUD.crear') }}"
                class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg">
                Agregar Nuevo Hotel
            </a>
        </div>

        
        @if (session('success'))
            <div class="mt-4 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg mx-auto w-11/12 lg:w-3/4"
                role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="overflow-x-auto shadow-2xl rounded-lg mx-auto w-full lg:w-3/4">
            <table class="min-w-full bg-white rounded-lg overflow-hidden">
                <thead class="text-white bg-gradient-to-r from-gray-700 via-gray-500 to-gray-700">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-semibold tracking-wide">Nombre</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold tracking-wide">Dirección</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold tracking-wide">Núm. Habitaciones</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold tracking-wide">Teléfono</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold tracking-wide">Calificación</th>
                        <th class="px-6 py-4 text-center text-sm font-semibold tracking-wide">Acción</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-100 divide-y divide-gray-200">
                    @foreach ($hotels as $hotel)
                        <tr class="hover:bg-blue-50 transition duration-300">
                            <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $hotel->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $hotel->address }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $hotel->number_rooms }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $hotel->phone_number }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $hotel->qualification }}</td>
                            <td class="px-6 py-4 whitespace-nowrap flex justify-center space-x-2">
                                <div>
                                    <button
                                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-1.5 px-3 rounded-full transition duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
                                        data-target="#modal{{ $hotel->id }}">
                                        Actualizar
                                    </button>
                                    @include('CRUD.actualizar')
                                </div>
                                <div>
                                    <form action="{{ route('CRUD.destroy', $hotel->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-600 hover:bg-red-700 text-white font-bold py-1.5 px-3 rounded-full">
                                            Eliminar
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const updateButtons = document.querySelectorAll('[data-target]');
        updateButtons.forEach(button => {
            button.addEventListener('click', function() {
                const modalId = this.getAttribute('data-target');
                const modal = document.querySelector(modalId);
                if (modal) {
                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                }
            });
        });

        const closeButtons = document.querySelectorAll('.close-modal');
        closeButtons.forEach(button => {
            button.addEventListener('click', function() {
                const modal = this.closest('.modal');
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            });
        });
    });
</script>
