<x-app-layout>
    <x-slot name="header">
        {{--<h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Algorithms') }}
        </h2>--}}
    </x-slot>

    <div class="flex flex-wrap overflow-hidden">

        <div class="w-1/3 overflow-hidden">
            1
        </div>

        <div class="w-1/3 overflow-hidden">
            2
        </div>

        <div class="w-1/3 overflow-hidden">
            3
        </div>

    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-blend-darken border-b border-gray-200">
                    Algorithms
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
