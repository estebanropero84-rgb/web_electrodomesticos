<x-app-layout>
    <x-slot name="header">
        <h2 class="text-3xl font-bold text-primary">Crear producto</h2>
    </x-slot>

    <div class="py-6 bg-fondo">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            @if ($errors->any())
                <div class="bg-danger/10 border border-danger text-danger px-4 py-3 rounded mb-6">
                    <div class="flex items-center mb-2">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01M4 4l16 16" />
                        </svg>
                        <strong>Se encontraron errores:</strong>
                    </div>
                    <ul class="list-disc list-inside text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="bg-white shadow-md rounded-lg p-6">
                <form action="{{ route('productos.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div>
                        <label class="block text-sm font-medium text-texto mb-1">Nombre del producto</label>
                        <input type="text" name="nombre" value="{{ old('nombre') }}"
                               class="w-full border-gray-300 rounded-md shadow-sm focus:ring-accent focus:border-accent">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-texto mb-1">Precio</label>
                        <input type="text" name="precio" value="{{ old('precio') }}"
                               class="w-full border-gray-300 rounded-md shadow-sm focus:ring-accent focus:border-accent">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-texto mb-1">Stock</label>
                        <input type="number" name="stock" value="{{ old('stock') }}"
                               class="w-full border-gray-300 rounded-md shadow-sm focus:ring-accent focus:border-accent">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-texto mb-1">Categoría</label>
                        <select name="categoria_id"
                                class="w-full border-gray-300 rounded-md shadow-sm focus:ring-accent focus:border-accent">
                            <option value="">Seleccione una categoría</option>
                            @foreach($categorias as $categoria)
                                <option value="{{ $categoria->id }}" {{ old('categoria_id') == $categoria->id ? 'selected' : '' }}>
                                    {{ $categoria->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit"
                                class="bg-success text-white px-6 py-2 rounded-md hover:bg-green-700 transition flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                            Guardar producto
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
