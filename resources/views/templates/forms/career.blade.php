

<div class="flex flex-col mb-4">
    <label class="mb-2 font-bold text-lg text-gray-900" for="nombre">Carera</label>
    <input type="text" class="border py-2 px-3 text-grey-800"  name="carera" id="carera"
    @if (old('carera'))
        value="{!!old('carera')!!}"
    @elseif(isset($data->carera))
        value="{!!$data->carera!!}"
    @else
        value=""
    @endif

    />
</div>

<div class="flex flex-col mb-4">
    <label class="mb-2 font-bold text-lg text-gray-900" for="nombre">Tipo</label>
    <select name="tipo" id="tipo" class="border py-2 px-3 text-grey-800">
        <option value="Ingenieria">Ingenieria</option>
        <option value="Maestria">Maestria</option>
        <option value="Licenciatura">Licenciatura</option>
    </select>
</div>

<div class="flex flex-col mb-4">
    <label class="mb-2 font-bold text-lg text-gray-900" for="descripcion">Descripcion</label>
    <div class="border py-2 px-3 text-grey-800"  id="descripcionQuill">
        @if (old('descripcion'))
        {!!old('descripcion')!!}
        @elseif(isset($data->descripcion))
        {!! $data->descripcion !!}
        @endif

    </div>
</div>
<div class="flex flex-col mb-4">
    <label class="mb-2 font-bold text-lg text-gray-900" for="objetivo">Objetivo</label>
    <div class="border py-2 px-3 text-grey-800"  id="objetivoQuill">
        @if (old('objetivo'))
        {!!old('objetivo')!!}
        @elseif(isset($data->objetivo))
        {!!$data->objetivo!!}
        @endif
    </div>
</div>
<div class="flex flex-col mb-4">
    <label class="mb-2 font-bold text-lg text-gray-900" for="aprendizaje">Aprendizaje</label>
    <div class="border py-2 px-3 text-grey-800"  id="aprendizajeQuill">
        @if (old('aprendizaje'))
        {!!old('aprendizaje')!!}
        @elseif(isset($data->aprendizaje))
        {!!$data->aprendizaje!!}
        @endif
    </div>
</div>
<div class="flex flex-col mb-4">
    <label class="mb-2 font-bold text-lg text-gray-900" for="trabajo">Trabajo</label>
    <div class="border py-2 px-3 text-grey-800"  id="trabajoQuill">
        @if (old('trabajo'))
        {!!old('trabajo')!!}
        @elseif(isset($data->trabajo))
        {!!$data->trabajo!!}
        @endif
    </div>
</div>
<div class="flex flex-col mb-4">
    <label class="mb-2 font-bold text-lg text-gray-900" for="perfil_ingreso">Perfil de ingreso</label>
    <div class="border py-2 px-3 text-grey-800"  id="perfil_ingresoQuill">
        @if (old('perfil_ingreso'))
        {!!old('perfil_ingreso')!!}
        @elseif(isset($data->perfil_ingreso))
        {!!$data->perfil_ingreso!!}
        @endif
    </div>
</div>
<div class="flex flex-col mb-4">
    <label class="mb-2 font-bold text-lg text-gray-900" for="perfil_egreso">Perfil de egreso</label>
    <div class="border py-2 px-3 text-grey-800"  id="perfil_egresoQuill">
        @if (old('perfil_egreso'))
        {!!old('perfil_egreso')!!}
        @elseif(isset($data->perfil_egreso))
        {!!$data->perfil_egreso!!}
        @endif
    </div>
</div>
<div class="flex flex-col mb-4">
    <label class="mb-2 font-bold text-lg text-gray-900" for="plan_estudio">Plan de estudio</label>
    <input type="file" class="border py-2 px-3 text-grey-800" name="plan_estudio"  id="plan_estudio" />
</div>
<div class="flex flex-col mb-4">
    <label class="mb-2 font-bold text-lg text-gray-900" for="image">Image</label>
    <input type="file" class="border py-2 px-3 text-grey-800" name="image" id="image" />
</div>

<input type="hidden" id="descripcion"  name="descripcion" value="">
<input type="hidden" id="objetivo" name="objetivo" value="">
<input type="hidden" id="aprendizaje" name="aprendizaje" value="">
<input type="hidden" id="trabajo" name="trabajo" value="">
<input type="hidden" id="perfil_ingreso" name="perfil_egreso" value="">
<input type="hidden" id="perfil_egreso" name="perfil_ingreso" value="">
<input type="hidden" id="id_universidad" name="id_universidad" value="{{$id}}">
<script>
    const quillOptions = {
        theme:'snow',
    }
    let descripcionQuill = new Quill("#descripcionQuill",quillOptions)
    let objetivoQuill = new Quill("#objetivoQuill",quillOptions)
    let aprendizajeQuill = new Quill("#aprendizajeQuill",quillOptions)
    let trabajoQuill = new Quill("#trabajoQuill",quillOptions)
    let perfil_egresoQuill = new Quill("#perfil_egresoQuill",quillOptions)
    let perfil_ingresoQuill = new Quill("#perfil_ingresoQuill",quillOptions)
</script>
