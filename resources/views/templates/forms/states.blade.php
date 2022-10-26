<div class="flex flex-col mb-4">
    <label class="mb-2 font-bold text-lg text-gray-900" for="estado">Estado</label>
    <input class="border py-2 px-3 text-grey-800"
    type="text"
    name="estado"
    id="estado"
    value="{{isset($data->estado)?$data->estado:''}}">
</div>
<div class="flex flex-col mb-4">
    <label class="mb-2 font-bold text-lg text-gray-900" for="image">image</label>
    <input class="border py-2 px-3 text-grey-800" type="file" name="image" id="image">
</div>
