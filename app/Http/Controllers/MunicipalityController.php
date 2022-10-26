<?php

namespace App\Http\Controllers;

use App\Models\Municipality;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class MunicipalityController extends Controller
{
    //
    public function index(){
        $municipalities = DB::table('municipalities')
        ->join('states','municipalities.id_state','=','states.id')
        ->select('municipalities.*','states.estado')
        ->simplePaginate(10);

        return view('admin.municipalities',['data'=>$municipalities]);
    }

    public function create(){

        $states = State::all();

        return view('admin.municipalities-create',["estados" => $states]);
    }

    public function edit($id){
        $municipality = Municipality::findOrFail($id);
        $estados = State::all();
        return view('admin.municipalities-edit',["data" => $municipality,
        "estados" => $estados
        ]);

    }

    public function update(Request $request, $id)
    {
        //
        if(Municipality::where('id','=',$id)->count() > 0){

            $this->validate($request,[
                'municipio' => ['required'],
                'image' => ['image'],
                'id_state' => ['required','integer'],
            ]);


            $datos = request()->only(['municipio','id_state','image']);

            $municipalityBeforeDelete = Municipality::findOrFail($id);

            if(isset($request->municipio)){
                $datos['slug'] = Str::slug($request->municipio);
            }

            if($request->hasFile('image')){
                Storage::delete('public/'.$municipalityBeforeDelete->image);
                $datos['image'] = $request->file('image')->store('municipalities','public');

            }

            Municipality::where('id','=',$id)->update($datos);

        }

        return redirect()->route('municipalities.edit',$id);

    }

    public function store(Request $request){
        $this->validate($request,[
            'municipio' => ['required','unique:municipalities'],
            'image' => ['image','required'],
            'id_state' => ['required']
        ]);

        $datos = request()->only(['municipio','id_state','image']);

        $datos['slug'] = Str::slug($request->municipio);

        if($request->hasFile('image')){
            $datos['image'] = $request->file('image')->store('municipalities','public');
            Municipality::create($datos);
        }

        return redirect()->route('admin.municipalities');
    }

    public function destroy($id)
    {
        # code...
        if(Municipality::where('id','=',$id)->count() > 0){

            $municipality = Municipality::findOrFail($id);
            Storage::delete('public/'.$municipality->image);
            Municipality::destroy($id);
        }

        return redirect()->route('admin.municipalities');

    }

}

