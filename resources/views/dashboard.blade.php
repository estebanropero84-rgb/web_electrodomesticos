<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="text-2xl font-bold text-gray-900">
                Panel de Control
            </h2>
            <div class="text-sm text-gray-500">
                {{ now()->format('d/m/Y - H:i') }}
            </div>
        </div>
    </x-slot>

    <div class="py-6 bg-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div class="bg-blue-800 rounded-lg shadow-xl p-6 mb-8">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-2xl font-bold text-white mb-2">Bienvenido al Sistema</h1>
                        <p class="text-white opacity-90">Sistema de Gestión de Inventario - Electrodomésticos</p>
                    </div>
                    <div class="hidden md:block">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>


            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

                <div class="bg-white rounded-lg shadow-md border-l-4 border-blue-500 p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2M4 13h2m8-8V4a1 1 0 00-1-1h-2a1 1 0 00-1 1v1m4 0h-4m4 6h-4m4 4h-4"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-600">Total Productos</p>
                            <p class="text-2xl font-bold text-gray-900">{{ $totalProductos ?? '15' }}</p>
                        </div>
                    </div>
                </div>


                <div class="bg-white rounded-lg shadow-md border-l-4 border-green-500 p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A2 2 0 013 12V7a4 4 0 014-4z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-600">Categorías</p>
                            <p class="text-2xl font-bold text-gray-900">{{ $totalCategorias ?? '5' }}</p>
                        </div>
                    </div>
                </div>


                <div class="bg-white rounded-lg shadow-md border-l-4 border-purple-500 p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-600">Stock Total</p>
                            <p class="text-2xl font-bold text-gray-900">{{ $totalStock ?? '120' }}</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">

                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="flex items-center mb-6">
                        <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Gestión de Productos</h3>
                    </div>
                    <p class="text-gray-600 mb-6">Administra el inventario de electrodomésticos.</p>

                    <div class="space-y-3">
                        <a href="{{ route('productos.index') }}"
                           class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-3 rounded-lg text-center transition duration-300 font-semibold block">
                            Ver Inventario Completo
                        </a>
                    </div>
                </div>


                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="flex items-center mb-6">
                        <div class="w-10 h-10 bg-green-600 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Agregar Producto</h3>
                    </div>
                    <p class="text-gray-600 mb-6">Crea un nuevo producto en el inventario.</p>

                    <a href="{{ route('productos.create') }}"
                       class="w-full bg-green-600 hover:bg-green-700 text-white px-4 py-4 rounded-lg text-center transition duration-300 font-semibold text-lg block">
                        Crear Nuevo Producto
                    </a>
                </div>


                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="flex items-center mb-6">
                        <div class="w-10 h-10 bg-purple-600 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Configuración</h3>
                    </div>
                    <p class="text-gray-600 mb-6">Gestiona tu cuenta y preferencias.</p>

                    <div class="space-y-4">
                        <a href="{{ route('profile.edit') }}"
                           class="flex items-center p-4 bg-gray-100 hover:bg-gray-200 rounded-lg transition duration-300">
                            <div class="w-8 h-8 bg-gray-600 rounded flex items-center justify-center mr-4">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="font-semibold text-gray-900">Perfil de Usuario</p>
                                <p class="text-sm text-gray-600">Actualizar información personal</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>


            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-4">Acciones Rápidas</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <a href="{{ route('productos.create') }}"
                       class="bg-green-600 hover:bg-green-700 text-white px-4 py-4 rounded-lg text-center transition duration-300 font-semibold text-lg">
                        ＋ Agregar Producto
                    </a>
                    <a href="{{ route('productos.index') }}"
                       class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-4 rounded-lg text-center transition duration-300 font-semibold text-lg">
                        📋 Ver Inventario
                    </a>
                    <a href="{{ route('profile.edit') }}"
                       class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-4 rounded-lg text-center transition duration-300 font-semibold text-lg">
                        👤 Mi Perfil
                    </a>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
