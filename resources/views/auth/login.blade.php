<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-primary to-accent">
        <div class="bg-white shadow-lg rounded-xl p-8 w-full max-w-md">
            <h2 class="text-2xl font-bold text-center text-primary mb-6">Acceso al sistema</h2>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Correo electrónico')" />
                    <x-text-input id="email" class="block mt-1 w-full"
                                  type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Contraseña')" />
                    <x-text-input id="password" class="block mt-1 w-full"
                                  type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                               class="rounded border-gray-300 text-accent shadow-sm focus:ring-accent"
                               name="remember">
                        <span class="ms-2 text-sm text-gray-600">Recordarme</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="text-sm text-primary hover:underline" href="{{ route('password.request') }}">
                            ¿Olvidaste tu contraseña?
                        </a>
                    @endif
                </div>

                <!-- Submit -->
                <div class="flex justify-center">
                    <x-primary-button class="bg-primary hover:bg-indigo-700 text-white px-6 py-2 rounded-md transition">
                        Iniciar sesión
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
