<x-app-layout>

    <section class="bg-neutral-900 text-white">
        <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center">
            
            <div class="mx-auto max-w-3xl text-center">
                <div class="">
                    <img src="https://www.freepnglogos.com/uploads/tupac-png/tupac-pac-cartoon-pictures-impremedia-21.png" class="m-auto w-64">
                </div>
                

                <h1 class="bg-gradient-to-r from-orange-300 via-orange-500 to-orange-600 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl"> 
                    Bienvenido a DabConcerts.

                    <span class="sm:block">La mejor web de conciertos.</span>
                </h1>

                <p class="mx-auto mt-4 max-w-xl sm:text-xl sm:leading-relaxed">
                    Te facilitaremos la entrada y la información de cualquier concierto al que desée asistir!
                </p>
            @auth
                <div class="mt-8 flex flex-wrap justify-center gap-4">
                    <a class="block w-full rounded border border-orange-600 bg-orange-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:outline-none active:text-opacity-75 sm:w-auto focus:ring-2 focus:ring-orange-500 focus:ring-offset-1 transition ease-in-out duration-150"
                        href="/concerts">
                        Conciertos
                    </a>

                    <a class="block w-full rounded border border-orange-600 px-12 py-3 text-sm font-medium text-white hover:bg-orange-600 focus:outline-none active:bg-orange-500 sm:w-auto focus:ring-2 focus:ring-orange-500 focus:ring-offset-1 transition ease-in-out duration-150"
                        href="/artists">
                        Artistas
                    </a>
                </div>
            @else
                <div class="mt-8 flex flex-wrap justify-center gap-4">
                    <a class="block w-full rounded border border-orange-600 bg-orange-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:outline-none active:text-opacity-75 sm:w-auto focus:ring-2 focus:ring-orange-500 focus:ring-offset-1 transition ease-in-out duration-150"
                        href="/register">
                        Regístrese
                    </a>

                    <a class="block w-full rounded border border-orange-600 px-12 py-3 text-sm font-medium text-white hover:bg-orange-600 focus:outline-none active:bg-orange-500 sm:w-auto focus:ring-2 focus:ring-orange-500 focus:ring-offset-1 transition ease-in-out duration-150"
                        href="/login">
                        Inicie Sesión
                    </a>
                </div>
            @endauth
            </div>
        </div>
    </section>

</x-app-layout>
