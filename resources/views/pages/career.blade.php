
    @extends('templates.base')

    @section('content')
        @include('templates.navegacion')


        <img src="{{$career->image}}" class="w-full h-screen" alt="">
        {{$career->id}}

        <div class="container mb-10 flex flex-col justify-center items-center mt-5 gap-3">
            <h2 class="text-center text-3xl font-bold" id="universidad">{{$career->carera}}</h2>

            <div>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#
                    Universidad:  {{$career->university->nombre}}</span>
            </div>


            <div class="grid grid-cols-2 gap-5">
                <div>
                    <h2 class="text-4xl font-bold">Descripcion</h2>
                    <p>{!!$career->descripcion!!}</p>
                </div>
                <div>
                    <h2 class="text-4xl font-bold">Objetivo de la carera</h2>
                    <p>{!!$career->objetivo!!}</p>
                </div>
                <div>
                    <h2 class="text-4xl font-bold">Que aprenderas</h2>
                    <p>{!!$career->aprendizaje!!}</p>
                </div>

                <div>
                    <h2 class="text-4xl font-bold">En que podras trabajar</h2>
                    <p>{!!$career->trabajo!!}</p>
                </div>

                <div>
                    <h2 class="text-4xl font-bold">Perfil de ingreso</h2>
                    <p>{!!$career->perfil_ingreso!!}</p>
                </div>

                <div>
                    <h2 class="text-4xl font-bold">Perfil de egreso</h2>
                    <p>{!!$career->perfil_egreso!!}</p>
                </div>

            </div>


        </div>


    @endsection




