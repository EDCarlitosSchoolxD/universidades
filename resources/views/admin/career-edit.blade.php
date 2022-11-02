@extends('templates.base')

@section('content')
    @include('layouts.navigation')


    <div class="container-sm">
        @foreach ($errors->all() as $error)
        <p type="text" id="username-error" class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-lg rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400 last:mb-0 mb-3" >
            {{$error}}
        </p>
        @endforeach


	</div>



    <div class="flex justify-center items-center w-full">
    <div class="w-3/4 bg-white rounded shadow-2xl p-8 m-4">
        <form id="formulario" enctype="multipart/form-data" action="{{route('career.update',$id)}}" class="bg-white shadow-md
        rounded px-8 pt-6 pb-8 mb-4" method="POST" >
        @method('PUT')
        @csrf
            @include('templates.forms.career')

            <input id="enviar" type="submit" class="bg-green-700 text-white
             p-3 rounded hover:bg-green-600 duration-300" value="Enviar" >
        </form>
    </div>
    </div>


    <script>

        const btnEnviar = document.getElementById('enviar');

        btnEnviar.addEventListener('click',e=>{
            e.preventDefault();
            const descripcion = document.getElementById('descripcion').value = descripcionQuill.container.firstChild.innerHTML;
            const objetivo = document.getElementById('objetivo').value = objetivoQuill.container.firstChild.innerHTML;
            const aprendizaje = document.getElementById('aprendizaje').value = aprendizajeQuill.container.firstChild.innerHTML;
            const trabajo = document.getElementById('trabajo').value  =trabajoQuill.container.firstChild.innerHTML
            const perfil_ingreso = document.getElementById('perfil_ingreso').value = perfil_ingresoQuill.container.firstChild.innerHTML;
            const perfil_egreso = document.getElementById('perfil_egreso').value = perfil_egresoQuill.container.firstChild.innerHTML;

            const form = document.getElementById('formulario').submit()


        })

    </script>


@endsection
