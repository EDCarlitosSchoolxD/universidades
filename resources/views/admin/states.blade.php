@extends('templates.base')

@section('content')
    @include('layouts.navigation')


    <div class="bg-white mt-5 container-sm">

        <div class="overflow-x-auto border-x border-t">
           <table class="table-auto w-full">
              <thead class="border-b">
                 <tr class="bg-gray-100">
                    <th class="text-left p-4 font-medium">
                       id
                    </th>
                    <th class="text-left p-4 font-medium">
                       Estado
                    </th>
                    <th class="text-left p-4 font-medium">
                       Imagen
                    </th>
                    <th>Acciones</th>
                 </tr>
              </thead>
              <tbody>

                @foreach ($data as $item)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-4">
                       {{$item->id}}
                    </td>
                    <td class="p-4">
                       {{$item->estado}}
                    </td>
                    <td class="p-4 w-1/4">
                        <img class="w-max h-max" src="{{$item->image}}" alt="{{$item->estado}}">
                    </td>

                    <td class="text-center">
                        <form method="POST" action="{{route('states.destroy',$item->id)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-800
                            p-2 rounded-full
                            text-white
                            hover:bg-red-900
                            ">Eliminar
                        </button>

                        </form>

                        <button class="bg-blue-400
                        p-2 rounded-full text-white
                        hover:bg-blue-500
                        ">Actualizar</button>
                    </td>

                 </tr>
                @endforeach

              </tbody>
           </table>

        </div>
        </div>




@endsection
