<x-app-layout>
    <x-slot name="header">
        <h2 class="text-3xl font-bold text-primary leading-tight">
            Panel principal
        </h2>
    </x-slot>

    <div class="py-12 bg-fondo">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Tarjeta de bienvenida -->
                <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition">
                    <div class="flex items-center mb-4">
                        <svg class="w-6 h-6 text-success mr-2" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                        <h3 class="text-xl font-semibold text-texto">Bienvenido al sistema</h3>
                    </div>
                    <p class="text-sm text-gray-600 mb-4">¡Has iniciado sesión correctamente como usuario autenticado!</p>
                    <a href="{{ route('productos.index') }}"
                       class="inline-block bg-accent text-white px-4 py-2 rounded hover:bg-blue-500 transition">
                        Ir al módulo de productos
                    </a>
                </div>

                <!-- Tarjeta de perfil -->
                <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition">
                    <div class="flex items-center mb-4">
                        <svg class="w-6 h-6 text-primary mr-2" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.657 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <h3 class="text-xl font-semibold text-texto">Gestión de perfil</h3>
                    </div>
                    <p class="text-sm text-gray-600 mb-4">Puedes editar tu información personal desde aquí.</p>
                    <a href="{{ route('profile.edit') }}"
                       class="inline-block bg-primary text-white px-4 py-2 rounded hover:bg-indigo-700 transition">
                        Editar perfil
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
