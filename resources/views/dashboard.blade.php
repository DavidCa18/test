<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                @if (session()->has('notification'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('notification') }}
                    </div>
                @endif

                <form method="POST" action="/profile">
                    @csrf

                    <!-- Nombres -->
                    <div class="mt-4">
                        <x-label for="name" :value="__('Nombres')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="Auth::user()->name" required autofocus />
                    </div>

                    <!-- Apellidos -->
                    <div class="mt-4">
                        <x-label for="surnames" :value="__('Apellidos')" />
                        <x-input id="surnames" class="block mt-1 w-full" type="text" name="surnames" :value="Auth::user()->surnames" required autofocus />
                    </div>

                    <!-- Dirección -->
                    <div class="mt-4">
                        <x-label for="address" :value="__('Dirección')" />
                        <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="Auth::user()->address" required />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-5">
                            {{ __('Actualizar Información') }}
                        </x-button>
                    </div>
                </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
