
    @extends('templates.base')

    @section('content')
        @include('templates.navegacion')

        <style>
            #map{
                width: 50%;
                height: 300px
            }
        </style>

        <div class="container">

            <h2 id="universidad">{{$universidad->nombre}}</h2>
            <p>{{$universidad->tipo}}</p>
            <p>{{$universidad->telefono}}</p>
            <a href="{{$universidad->url_web}}">Web</a>
            <img src="{{$universidad->image}}" alt="{{$universidad->nombre}}">
            <p>{{$universidad->direccion}}</p>

            <div id="map"></div>

        </div>


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







