<x-app-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100" style="background-image: url(https://cloudfront-eu-central-1.images.arcpublishing.com/diarioas/PHQBX5S5UBA6TCO3Y6PWUDULM4.jpeg); background-size: cover;">
        <div class="w-full sm:max-w-lg px-6 py-4 bg-neutral-800 shadow-md overflow-hidden sm:rounded-lg m-auto">
            <h1 class="my-3 bg-gradient-to-r from-orange-300 via-orange-500 to-orange-600 bg-clip-text text-3xl font-extrabold text-transparent text-center">Añadir Nuevo Artista</h1>
            <form method="POST" action="{{route('artistStore')}}" enctype="multipart/form-data">
                @csrf
                
                <!-- Nombre -->
                <div>
                    <x-input-label for="nombre" :value="__('Nombre')" />
                    <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" required autocomplete="name" placeholder="Nombre" />
                    <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                </div>

                <!-- Descripcion -->
                <div class="mt-4">
                    <x-input-label for="descripcion" :value="__('Descripción')" />
                    <x-text-input id="descripcion" class="block mt-1 w-full" type="text" name="descripcion" required placeholder="Descripción Max. 255" />
                    <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
                </div>

                <!-- Imagen del Artista -->
                <div class="mt-4">
                    <x-input-label for="img_artista" :value="__('Imagen del Artista')" />
                    <x-text-input id="img_artista" class="block mt-1 w-full" type="text" name="img_artista" required placeholder="Url Imagen del Artista" />
                    <x-input-error :messages="$errors->get('img_artista')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a href="{{route('artistIndex')}}" class="mr-2">
                        <button type="button" class="inline-flex items-center px-4 py-2 bg-orange-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-orange-400 focus:bg-orange-600 active:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Cancelar
                        </button>
                    </a>
                    
                    <x-primary-button>
                        {{ __('Aceptar') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>