<div class="flex flex-col mb-4">
    <label class="mb-2 font-bold text-lg text-gray-900" for="municipio">Municipio</label>
    <input class="border py-2 px-3 text-grey-800"
    type="text"
    name="municipio"
    id="municipio"
    @if (old('municipio'))
        value="{{old('municipio')}}"

    @elseif (isset($data->municipio))
        value="{{$data->municipio}}">
   @endif



</div>


<div class="flex flex-col mb-4">
    <label class="mb-2 font-bold text-lg text-gray-900" for="image">Estado</label>
    <select name="id_state" id="id_state">
        @foreach ($estados as $estado)
            @if (old('id_state'))
                 <option
                 {{old('id_state') == $data->id_state?'selected':''}}
                  value="{{$estado->id}}">{{$estado->estado}}</option>
            @else
                <option
                {{$data->id_state == $estado->id?'selected':''}}
                   value="{{$estado->id}}">{{$estado->estado}}</option>
            @endif



        @endforeach
    </select>

</div>

<div class="flex flex-col mb-4">
    <label class="mb-2 font-bold text-lg text-gray-900" for="image">Image</label>
    <input class="border py-2 px-3 text-grey-800" type="file" name="image" id="image">
</div>
