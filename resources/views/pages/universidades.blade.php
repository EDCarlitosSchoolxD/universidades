@extends('templates.base')

@section('content')
    @include('templates.navegacion')


    <div class="container-sm border-black p-10 flex justify-evenly flex-wrap gap-5">

        @foreach ($data as $d)
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full" src="{{$d->image}}" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <p class="text-center text-xl">{{$d->nombre}}</p>
            <div class="px-6 pt-4 pb-2">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{$d->tipo}}</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{$d->municipality->municipio}}</span>
            </div>
            <div class="px-6 pt-4 pb-2 h-auto">
                <a href="{{route('universities.show',$d->slug)}}" class="bg-blue-500 hover:bg-blue-600 text-white  mt-3 p-4 text-center" >Más informacion</a>
            </div>

            </div>
        </div>
        @endforeach


    </div>


    <div class="w-1/3 mx-auto">
        {{$data->links()}}
    </div
@endsection
