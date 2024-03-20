<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Bienvenido") }}
                    {{ $rol ?? '' }}
                    @if (Auth::user()->rol == 1)
            {{ __("administrador") }}
        @elseif (Auth::user()->rol == 2)
            {{ __("usuario normal") }}
        @else
            {{ __("usuario sin rol definido") }}
        @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
