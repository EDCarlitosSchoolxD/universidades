<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl flex justify-around flex-wrap mx-auto sm:px-6 lg:px-8 ">

            <div class="w-80  p-3 rounded flex flex-col items-center justify-center bg-green-200">
                <h2 class="text-3xl">Estados</h2>
                <a class="bg-green-600 text-white rounded p-2" href="{{route('admin.states')}}">Administrar</a>
            </div>

            <div class="w-80  p-3 rounded flex flex-col items-center justify-center bg-green-200">
                <h2 class="text-3xl">Municipios</h2>
                <a class="bg-green-600 text-white rounded p-2" href="{{route('admin.municipalities')}}">Administrar</a>
            </div>
            <div class="w-80  p-3 rounded flex flex-col items-center justify-center bg-green-200">
                <h2 class="text-3xl">Universidades</h2>
                <a class="bg-green-600 text-white rounded p-2" href="{{route('admin.universities')}}">Administrar</a>
            </div>

        </div>

    </div>



</x-app-layout>
