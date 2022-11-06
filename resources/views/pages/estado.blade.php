
    @extends('templates.base')

    @section('content')
        @include('templates.navegacion')

        <style>
            #map{
                width: 50%;
                height: 300px
            }
        </style>

        <div class="container-lg">
            <h3 class="text-center text-5xl mt-5 font-normal">Municipios de {{$data->estado}}</h3>
            <div class="flex flex-wrap justify-evenly gap-5 mt-10">
                @foreach ($data->municipalities as $municipality)
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img style="height: 160px; width: 260px;" src="{{asset('storage/'.$municipality->image)}}" alt="{{$municipality->municipio}}">
                    <div class="px-6 py-4 text-center">
                        <h3 class="text-xl">{{$municipality->municipio}}</h3>
                    </div>
                    <div class="px-6 pt-4 pb-4 text-center">
                        <a href="{{route('universities.indexui',['municipio' => $municipality->slug])}}"
                        class="bg-slate-800 hover:bg-slate-700 text-center inline-block px-6 w-full pt-4 pb-4 text-white">
                        Ver universidades</a>
                    </div>

                </div>
            @endforeach

            </div>
        </div>

        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>

    @endsection







