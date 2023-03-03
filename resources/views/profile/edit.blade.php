<x-app-layout>
    <x-slot name="header">
        <div class="text-center m-auto w-72">
            <h2 class="bg-gradient-to-r from-orange-300 via-orange-500 to-orange-600 bg-clip-text font-extrabold text-transparent text-3xl">
                Bienvenido {{ Auth::user()->name }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12 bg-black">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 space-y-6 ">
            <div class="p-4 sm:p-8 bg-neutral-800 text-white shadow sm:rounded-lg border border-orange-400">
                <div class="max-w-xxl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-neutral-800 text-white shadow sm:rounded-lg border border-orange-400">
                <div class="max-w-xxl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-neutral-800 text-white shadow sm:rounded-lg border border-orange-400 text-justify">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
