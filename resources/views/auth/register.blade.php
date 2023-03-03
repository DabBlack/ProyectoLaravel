<x-guest-layout>
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-neutral-800 shadow-md overflow-hidden sm:rounded-lg">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Nombre')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Nombre" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

             <!-- Apellidos -->
            <div class="mt-4">
                <x-input-label for="apellidos" :value="__('Apellidos')" />
                <x-text-input id="apellidos" class="block mt-1 w-full" type="text" name="apellidos" :value="old('apellidos')" required autofocus autocomplete="surnames" placeholder="Apellidos" />
                <x-input-error :messages="$errors->get('apellidos')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Correo Electrónico')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username"  placeholder="correo@correo.com" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Contraseña')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password"  placeholder="••••••••" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirma tu contraseña')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password"  placeholder="••••••••" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-orange-400 hover:text-orange-500 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 " href="{{ route('login') }}">
                    {{ __('¿Estas registrado? Inicia sesión.') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Registrarse') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
