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
    <div class="w-3/5 bg-white rounded shadow-2xl p-3 m-4">
        <form enctype="multipart/form-data" action="{{route('universities.store')}}" class="bg-white shadow-md
        rounded px-8 pt-6 pb-8 mb-4" method="POST" >
        @csrf
            @include('templates.forms.universities')

            <input type="submit" class="bg-green-700 text-white
             p-3 rounded hover:bg-green-600 duration-300" value="Enviar" >
        </form>
    </div>
    </div>




    <!-- Make sure you put this AFTER Leaflet's CSS -->


@endsection
