<!-- <div class="rounded-xl overflow-hidden shadow-lg bg-gradient-to-b from-orange-100 via-orange-300 to-orange-700">
    <img class="w-full" src="https://i.pinimg.com/736x/0a/05/9b/0a059bf865e8e8ec542d506da3a2e2ce.jpg" alt="Imagen Artista" style="height: 500px;">
    <div class="px-6 py-4">
        <div class="font-bold text-3xl mb-2 text-center">The Coldest Sunset</div>
        <p class="text-md text-justify font-bold">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis
            eaque, exercitationem praesentium nihil.
        </p>
    </div>
    <div class="px-6 pt-4 pb-2 text-center">
        <span
            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
        <span
            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
        <span
            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
    </div>
</div> -->

<div href="#" class="group relative block bg-black">
    <img alt="Imagen Artista" src="https://cdn.telediario.cr/uploads/media/2023/01/18/ferxxo-presentara-costa-rica-marzo.jpg" class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50" />

    <div class="relative p-4 sm:p-6 lg:p-8">
        <p class="text-sm font-medium uppercase tracking-widest text-orange-500">
            Artista
        </p>

        <p class="text-xl font-bold text-white sm:text-2xl">{{$nombre}}</p>

        <div class="mt-32 sm:mt-48 lg:mt-64">
            <div class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                <p class="text-sm text-white">
                    {{$descripcion}}
                </p>
            </div>
        </div>
    </div>
</div>