<x-guest-layout>

        <!-- Sección Izquierda: Logo -->
        <div class="w-full flex items-center justify-center bg-teal p-4 h-1/2 lg:h-full lg:w-[60%]">
            <div>
                <img src="{{ asset('img/icono.svg') }}" alt="Logo" class="max-w-full h-auto">
            </div>
        </div>

        <!-- Sección Derecha: Formulario -->
        <div class="w-full flex items-center justify-center bg-darkTeal p-4 h-1/2 lg:h-full lg:w-[40%]">
            <div class="w-full max-w-md px-6 py-4 shadow-md rounded-lg">
                <!-- Título -->
                <h2 class="text-3xl font-semibold text-white dark:text-gray-300 mb-6 text-center">Regístrate</h2>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-text-input id="name" class="block mt-1 w-full mb-4" type="text" name="name"
                            :value="old('name')" required autofocus autocomplete="name" placeholder="Name"/>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- LastName -->
                    <div>
                        <x-text-input id="lastName" class="block mt-1 w-full" type="text" name="lastName"
                            :value="old('lastName')" required autofocus autocomplete="lastName" placeholder="Last name"/>
                        <x-input-error :messages="$errors->get('lastName')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autocomplete="username" placeholder="Email address"/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- phoneNumber -->
                    <div class="mt-4">
                        <x-text-input id="phoneNumber" class="block mt-1 w-full" type="text" name="phoneNumber"
                            :value="old('phoneNumber')" required autocomplete="phoneNumber" placeholder="Phone number"/>
                        <x-input-error :messages="$errors->get('phoneNumber')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">

                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password" placeholder="Password"/>

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">

                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password"/>

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-white dark:text-gray-400 hover:text-gray-400 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                            href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-primary-button class="ms-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
</x-guest-layout>
