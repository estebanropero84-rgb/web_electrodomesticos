<x-app-layout>
    <x-slot name="header">
        <h2 class="text-3xl font-bold text-primary">Listado de productos</h2>
    </x-slot>

    <div class="py-6 bg-fondo">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="bg-success/10 border border-success text-success px-4 py-3 rounded mb-6 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold text-texto">Productos registrados</h3>
                <a href="{{ route('productos.create') }}"
                   class="bg-accent text-white px-4 py-2 rounded hover:bg-blue-500 transition">
                    + Crear nuevo producto
                </a>
            </div>

            <div class="overflow-x-auto bg-white shadow-md rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-accent/10">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-texto">Nombre</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-texto">Precio</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-texto">Stock</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-texto">Categoría</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold text-texto">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach($productos as $producto)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">{{ $producto->nombre }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">${{ number_format($producto->precio, 0) }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $producto->stock }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $producto->categoria->nombre }}</td>
                                <td class="px-6 py-4 whitespace-nowrap space-x-2 flex items-center">
                                    <a href="{{ route('productos.edit', $producto) }}"
                                       class="text-blue-600 hover:text-blue-800 flex items-center gap-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M11 5h2M12 7v2m0 4h.01M4 4l16 16" />
                                        </svg>
                                        Editar
                                    </a>
                                    <form action="{{ route('productos.destroy', $producto) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="text-red-600 hover:text-red-800 flex items-center gap-1"
                                                onclick="return confirm('¿Eliminar este producto?')">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
