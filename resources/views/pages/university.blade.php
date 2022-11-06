
    @extends('templates.base')

    @section('content')
        @include('templates.navegacion')

        <style>
            #map{
                width: 50%;
                height: 300px
            }
        </style>

        <img src="{{asset('storage/'.$universidad->image)}}" class="w-full h-screen object-cover shadow-md" alt="">


        <div class="container mb-10 flex flex-col justify-center items-center mt-5 gap-3">
            <h2 class="text-center text-3xl font-bold" id="universidad">{{$universidad->nombre}}</h2>

            <div>
                <p>{{$universidad->direccion}}</p>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{$universidad->tipo}}</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Telefono: {{$universidad->telefono}}</span>
                <a target="_BLANK" href="{{$universidad->url_web}}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#Página de la escuela</a>
            </div>




            <div id="map"></div>

        </div>


        @auth
        <div class="container">
            <a href="{{route('career.create',$universidad->id)}}" class="w-12 my-3 bg-emerald-500 hover:bg-emerald-600
            rounded p-4 text-white
            ">Agregar Carrera</a>
        </div>
        @endauth





        <div class="container-lg">
            <h3 class="text-center text-2xl font-normal">Carreras de la universidad</h3>
            <div class="flex flex-wrap justify-evenly gap-5 mt-10">
                @foreach ($universidad->careers as $career)
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="{{asset('storage/'.$career->image)}}" alt="{{$career->carera}}">
                    <div class="px-6 py-4">
                        <h3>{{$career->carera}}</h3>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{$career->tipo}}</span>
                        @auth
                            <form class="inline" method="POST" action="{{route('career.destroy',[
                                'slug'=> $universidad->slug,
                                'id' => $career->id
                                ])}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit"  class="bg-red-500 p-3 rounded-lg text-white">Eliminar</button>
                            </form>
                            <a href="{{route('career.edit',$career->id)}}" class="bg-blue-500 p-3 rounded-lg text-white">Editar</a>
                        @endauth

                    </div>
                    <div class="px-6 pt-4 pb-4 text-center">
                        <a href="{{route('career.show',[$universidad->slug,$career->slug])}}"
                        class="bg-slate-800 hover:bg-slate-700 text-center inline-block px-6 w-full pt-4 pb-4 text-white">
                        Más informacion</a>
                    </div>

                </div>
            @endforeach

            </div>
        </div>


        <br><br>
        <br><br>
        <br><br>


        <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
        <script>

            const latitud = {!! $universidad->latitud !!};
            const longitud = {!! $universidad->longitud !!};
            const universidadDom = document.getElementById('universidad');

            const universidadValue = universidadDom.innerText;
            console.log(universidadValue);

            const map = L.map('map').setView([latitud, longitud], 17);

            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);

            const marker = L.marker([latitud,longitud]).addTo(map);
            marker.bindPopup(`<h1>${universidadValue}</h1>`).openPopup();



        </script>
    @endsection







