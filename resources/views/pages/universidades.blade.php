@extends('templates.base')

@section('content')
    @include('templates.navegacion')


    @if (isset($municipio))
        <div class="w-full h-screen relative shadow-lg">
            <img class="w-full h-full object-cover" src="{{asset('storage/'.$municipio->image)}}" alt="">
            <div class="absolute top-0 z-30 flex flex-col justify-center items-center right-0 left-0 bottom-60 gap-8">
                <h1 class="text-white text-8xl font-bold text-center">{{mb_strtoupper($municipio->municipio)}}</h1>
                <p class="text-white text-2xl tracking-widest text-center">OPORTUNIDADES DE EDUCACIÓN QUE {{mb_strtoupper($municipio->municipio)}} TE OFRECE</p>
            </div>
            <div class="bg-black absolute top-0 left-0 right-0 bottom-0 opacity-40"></div>
        </div>
    @endif




    <div class="container-sm border-black p-10 flex justify-evenly flex-wrap gap-5 min-h-screen">

        @foreach ($data as $d)
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full" style="width: 240px;height: 240px;" src="{{asset('storage/'.$d->image)}}" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <p class="text-center text-xl">{{$d->nombre}}</p>
            <div class="px-6 pt-4 pb-2 flex justify-evenly flex-wrap">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{$d->tipo}}</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{$d->municipality->municipio}}</span>

            </div>

            <div class="px-6 pt-4 pb-4 text-center">
                <a href="{{route('universities.show',$d->slug)}}" class="bg-slate-800 w-full hover:bg-slate-700 text-center inline-block px-6  pt-4 pb-4 text-white">Más informacion</a>
            </div>

            </div>
        </div>
        @endforeach


    </div>


    @if (isset($data->links))
        <div class="w-1/3 mx-auto">
            {{$data->links()}}
        </div
    @endif

@endsection
