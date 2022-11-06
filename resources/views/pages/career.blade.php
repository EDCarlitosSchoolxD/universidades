
    @extends('templates.base')

    @section('content')
        @include('templates.navegacion')

        <style>



        </style>

        <div class="w-full h-screen relative shadow-lg">
            <div style="background-image: url({{asset('storage/'.$career->image)}});" class="w-full h-full object-cover bg-cover" >
            <div class="absolute top-0 z-30 flex flex-col justify-center items-center right-0 left-0 bottom-0 gap-8">
                <h1 class="text-white text-7xl font-bold text-center">{{mb_strtoupper($career->carera)}}</h1>
                <p class="text-white text-2xl tracking-widest text-center">{{mb_strtoupper($career->university->nombre)}}</p>
            </div>

            </div>
            <div class="bg-black absolute top-0 left-0 right-0 bottom-0 opacity-40"></div>
        </div>

        </div>




        <div class="grid md:grid-cols-2 mt-14 container">
            <div>
                <div class="bg-white w-3/4 mx-auto opacity-80 px-20 md:py-10 ">
                    <h3 class="text-center text-3xl font-bold text-sky-900">Descripcion</h3>
                    <p class="text-center mt-3 text-xl">{!!$career->descripcion!!}</p>
                </div>
                <div class="bg-white w-3/4 mx-auto opacity-80 md:px-20">
                    <h3 class="text-center text-3xl font-bold text-sky-900">Objetivo general</h3>
                    <p class="text-center mt-3 text-xl">{!!$career->objetivo!!}</p>
                </div>
            </div>


            <div>
                <div id="accordion-color" data-accordion="collapse" class="px-10" data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white">
                    <x-acordeon numero="1" titulo="Perfil de ingreso" :contenido="$career->perfil_ingreso" />
                    <x-acordeon numero="2" titulo="Perfil de egreso" :contenido="$career->perfil_ingreso" />
                    <x-acordeon numero="3" titulo="¿Que aprenderás en la carera?" :contenido="$career->aprendizaje" />
                    <x-acordeon numero="4" titulo="¿En que podras trabajar?" :contenido="$career->trabajo" />
                        <a href="{{asset('storage/'.$career->plan_estudio)}}" target="_BLANK" class="bg-blue-100 p-4 w-full justify-center inline-flex items-center">
                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                            <span>Plan de estudios</span>
                        </a>
                </div>

            </div>
        </div>
    @endsection




