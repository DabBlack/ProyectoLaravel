<section>
    <header>
        <h2 class="text-lg font-medium text-white">
            {{ __('Información Personal') }}
        </h2>

        <p class="mt-1 text-sm text-white">
            {{ __("Actualice la información de su perfil.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')
        
        <div>
            <img src="storage/img/{{$user->img_user}}" alt="Avatar" class="m-auto w-52 h-52" style="border-radius: 100%;">
            <x-input-label for="img_user" :value="__('Actualizar Avatar')" />
            <input type="file" name="img_user" value="old('img_user', '$user->img_user')" class="mt-2">
            <x-input-error class="mt-2" :messages="$errors->get('img_user')" />
         </div>

        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="apellidos" :value="__('Apellidos')" />
            <x-text-input id="apellidos" name="apellidos" type="text" class="mt-1 block w-full" :value="old('apellidos', $user->apellidos)" required autofocus autocomplete="apellidos" />
            <x-input-error class="mt-2" :messages="$errors->get('apellidos')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Correo Electrónico')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Su dirección de correo electrónico no está verificada.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Haga clic aquí para volver a enviar el correo electrónico de verificación.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div>
            <x-input-label for="telefono" :value="__('Telefono')" />
            <x-text-input id="telefono" name="telefono" type="text" class="mt-1 block w-full" :value="old('telefono', $user->telefono)" required autofocus autocomplete="telefono" />
            <x-input-error class="mt-2" :messages="$errors->get('telefono')" />
        </div>

        <div>
            <x-input-label for="ciudad" :value="__('Ciudad')" />
            <x-text-input id="ciudad" name="ciudad" type="text" class="mt-1 block w-full" :value="old('ciudad', $user->ciudad)" required autofocus autocomplete="ciudad" />
            <x-input-error class="mt-2" :messages="$errors->get('ciudad')" />
        </div>

        <div>
            <x-input-label for="pais" :value="__('País')" />
            <x-text-input id="pais" name="pais" type="text" class="mt-1 block w-full" :value="old('pais', $user->pais)" required autofocus autocomplete="pais" />
            <x-input-error class="mt-2" :messages="$errors->get('pais')" />
        </div>

        <div>
            <x-input-label for="fecha_nac" :value="__('Fecha de Nacimiento')" />
            <x-text-input id="fecha_nac" name="fecha_nac" type="date" class="mt-1 block w-full" :value="old('fecha_nac', $user->fecha_nac)" required autofocus autocomplete="fecha_nac" />
            <x-input-error class="mt-2" :messages="$errors->get('fecha_nac')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Guardar') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Guardado.') }}</p>
            @endif
        </div>
    </form>
</section>
