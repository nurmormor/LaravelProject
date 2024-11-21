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
            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button>
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
