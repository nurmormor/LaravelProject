<x-guest-layout>
    <!-- Sección Izquierda: Logo (2/3 de la pantalla) -->
    <div class="w-full flex items-center justify-center bg-teal p-4 h-1/2 lg:h-full lg:w-[60%]">
        <div>
            <img src="{{ asset('img/icono.svg') }}" alt="Logo">
        </div>
    </div>

    <!-- Sección Derecha: Formulario (1/3 de la pantalla) -->
    <div class="w-full flex items-center justify-center bg-darkTeal p-4 h-1/2 lg:h-full lg:w-[40%]">
        <div class="w-full max-w-md px-6 py-4 shadow-md rounded-lg">
            <!-- Título -->
            <h2 class="text-3xl font-semibold text-white dark:text-gray-300 mb-6 text-center">Inicio de sesión</h2>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autofocus autocomplete="username" placeholder="Email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4 relative">
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" placeholder="Contraseña" />

                    <!-- Icono de ojo -->
                    <span id="toggle-password" class="absolute inset-y-0 right-3 flex items-center cursor-pointer">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <!-- Ojo abierto -->
                            <path id="eye-open"
                                d="M3.25909 11.6021C3.94254 8.32689 6.79437 6 10 6C13.2057 6 16.0574 8.32688 16.7409 11.6021C16.7974 11.8725 17.0622 12.0459 17.3325 11.9895C17.6029 11.933 17.7763 11.6682 17.7199 11.3979C16.9425 7.67312 13.6934 5 10 5C6.3066 5 3.05742 7.67311 2.28017 11.3979C2.22377 11.6682 2.39718 11.933 2.6675 11.9895C2.93782 12.0459 3.20268 11.8725 3.25909 11.6021Z"
                                fill="#212121" />
                            <!-- Ojo cerrado -->
                            <path id="eye-closed"
                                d="M9.98953 8C11.9225 8 13.4895 9.567 13.4895 11.5C13.4895 13.433 11.9225 15 9.98953 15C8.05653 15 6.48953 13.433 6.48953 11.5C6.48953 9.567 8.05653 8 9.98953 8Z"
                                fill="#212121" style="display: none;" />
                        </svg>
                    </span>

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Olvidé mi contraseña -->
                <div class="flex justify-end mt-2 mb-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-white hover:text-red-500" href="{{ route('password.request') }}">
                            {{ __('Olvidé mi contraseña') }}
                        </a>
                    @endif
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" name="remember"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Recuerdame') }}</span>
                    </label>
                </div>

                <x-primary-button>
                    {{ __('Iniciar sesión') }}
                </x-primary-button>

                <!-- Enlace de registro -->
                <a href="{{ route('register') }}"
                    class="w-full inline-flex justify-center items-center px-4 py-2 bg-teal border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#0A2827] focus:outline-none focus:ring-2 focus:ring-teal-300 focus:ring-offset-2 transition ease-in-out duration-150 mt-3">
                    {{ __('Regístrate') }}
                </a>

            </form>
        </div>
    </div>
</x-guest-layout>
