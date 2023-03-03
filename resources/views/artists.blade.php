    <!-- <x-slot name="header">
        <div class="text-center m-auto w-32">
            <h2 class="bg-gradient-to-r from-orange-300 via-orange-500 to-orange-600 bg-clip-text font-extrabold text-transparent text-3xl">
                {{ __('Artistas') }}
            </h2>
        </div>
    </x-slot> -->

<x-app-layout>
    <div class="py-12">
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-neutral-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-12 text-gray-900 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 max-w-full">
                    @foreach ($artists as $artist)
                        <x-card-artist-component :id='$artist->id' :nombre='$artist->nombre' :descripcion='$artist->descripcion' :img='$artist->img_artista' ></x-card-artist-component>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="text-center m-auto pb-5">
        <a href="{{route('artistCreate')}}"><x-primary-button>Nuevo Artista</x-primary-button></a>
        <br><br>
    </div>

</x-app-layout>