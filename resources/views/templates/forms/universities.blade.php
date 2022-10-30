<div class="flex flex-col mb-4">
    <label class="mb-2 font-bold text-lg text-gray-900" for="nombre">Universidad</label>
    <input class="border py-2 px-3 text-grey-800"
    type="text"
    name="nombre"
    id="nombre"
    value="">
</div>
<div class="flex flex-col mb-4">
    <label class="mb-2 font-bold text-lg text-gray-900" for="image">Imagen</label>
    <input class="border py-2 px-3 text-grey-800" type="file" name="image" id="image">
</div>

<div class="flex flex-col mb-4">
    <label class="mb-2 font-bold text-lg text-gray-900" for="tipo">Tipo:</label>
    <select name="tipo" id="tipo">
        <option value="Privada">Privada</option>
        <option value="Publica">Publica</option>
    </select>

</div>

<div class="flex flex-col mb-4">
    <label class="mb-2 font-bold text-lg text-gray-900" for="image">Estado:</label>
    <select name="estado" id="estado">
        @foreach ($states as $state)
            <option value="{{$state->id}}">{{$state->estado}}</option>
        @endforeach
    </select>

</div>

<div class="flex flex-col mb-4">
    <label class="mb-2 font-bold text-lg text-gray-900" for="image">Municipio:</label>
    <select name="id_municipio" id="id_municipio">
        @foreach ($municipalities as $municipality)
            <option value="{{$municipality->id}}">{{$municipality->municipio}}</option>
        @endforeach
    </select>

</div>



<div class="flex flex-col mb-4">
    <label class="mb-2 font-bold text-lg text-gray-900" for="url_web">Telefono:</label>
    <input class="border py-2 px-3 text-grey-800"
    type="tel"
    name="telefono"
    id="telefono"
    value="">
</div>


<div class="flex flex-col mb-4">
    <label class="mb-2 font-bold text-lg text-gray-900" for="url_web">Url_Web</label>
    <input class="border py-2 px-3 text-grey-800"
    type="url"
    name="url_web"
    id="url_web"
    value="">
</div>


<div class="flex w-4/5 mx-auto justify-center flex-wrap gap-4">
    <div class="flex flex-col mb-4">
        <label class="mb-2 font-bold text-lg text-gray-900" for="url_web">Latitud:</label>
        <input class="border py-2 px-3 text-grey-800
        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none"
        type="text"
        name="latitud"
        id="latitud"
        value="">
    </div>
    <div class="flex flex-col mb-4">
        <label class="mb-2 font-bold text-lg text-gray-900" for="url_web">Longitud</label>
        <input class="border py-2 px-3 text-grey-800
        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none"
        type="text"
        name="longitud"
        id="longitud"
        value="">
    </div>

</div>


<div  id="map"></div>

<style>
    #map{
        height: 300px;
        width: 100%
}
</style>
<script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg="
crossorigin=""></script>
,
<script>

    const latitudDom = document.getElementById('latitud');
    const longitudDom = document.getElementById('longitud');
    const estadoDom = document.getElementById('estado');
    const municipiosDom = document.getElementById('id_municipio')

    //const ESTADOS = {!! json_encode($states)!!}
    const MUNICIPIOS = {!!json_encode($municipalities)!!};



    let map = L.map('map').setView([23.5540767, -102.6205], 5)

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);



    map.on('click',onMapClick);

    let marker;


    estado.addEventListener('change',changeMunicipios)




    function onMapClick(e){
        const latitud = e.latlng.lat;
        const longitud = e.latlng.lng;

        console.log({latitud,longitud});

        if(marker){
            marker.remove();
        }
        marker = L.marker([latitud,longitud]).addTo(map);
        latitudDom.value = latitud;
        longitudDom.value = longitud;

    }

    async function changeMunicipios(e){
        console.log(e.target.value);

        const value = parseInt(e.target.value)

        const municipalities = await MUNICIPIOS.filter(municipio=>municipio.id_state === value)
        console.log(municipalities);


        removeChildNodes(municipiosDom)


        const elements = municipalities.forEach(municipio=>{
                element = document.createElement('option');
                element.value =municipio.id;
                element.innerText = municipio.municipio
                municipiosDom.appendChild(element)
                return element;
        })




    }

    function removeChildNodes(element) {
        if ( element.hasChildNodes() )
        {
        while ( element.childNodes.length >= 1 )
        {
        element.removeChild( element.firstChild );
        }
        }
    }


</script>