<?php

namespace App\Http\Controllers;

use App\Models\Municipality;
use App\Models\State;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class UniversityController extends Controller
{
    //
    public function index(){
        $universities = DB::table('universities')
        ->join('municipalities','universities.id_municipio','=','municipalities.id')
        ->select('universities.*','municipalities.municipio')
        ->simplePaginate(10);

        return view('admin.universities',['data'=>$universities]);

    }
    public function show($slug){
        $university = University::where('slug','=',$slug)->firstOrFail();

        return view('pages.university',["universidad" => $university]);
    }

    public function create(){
        $states = State::all();
        $municipalities = Municipality::all();

        return view('admin.universities-create',["states" => $states,
        "municipalities" => $municipalities]);
    }


    public function destroy($id)
    {
        # code...
        if(University::where('id','=',$id)->count() > 0){

            /**Mejorar Codigo para Eliminar todas las imagenes de las carreras */

            $university = University::findOrFail($id);
            Storage::delete('public/'.$university->image);
            University::destroy($id);

        }

        return redirect()->route('admin.universities');


    }


    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'nombre' => ['required','unique:universities'],
            'tipo' => ['required','in:Publica,Privada'],
            //'direccion' => ['required'],
            'telefono' => ['required'],
            'url_web' => ['required','url'],
            'image' => ['image','required'],
            'id_municipio' => ['required','integer'],
            'latitud' => ['required','numeric'],
            'longitud' => ['required','numeric']
        ]);

        $datos = request()->only(['nombre','tipo','direccion','telefono','url_web','image','id_municipio'
        ,'latitud','longitud']);

        $datos['slug'] = Str::slug($request->nombre);
        $datos['likes'] = 0;



        if($request->hasFile('image')){
            $datos['image'] = $request->file('image')->store('university','public');
        }


        University::create($datos);

        return redirect()->route('admin.universities');


    }

    public function edit($id){
        $states = State::all();
        $municipalities = Municipality::all();
        $university = University::findOrFail($id);

        return view('admin.university-edit',["data" => $university,
        "states" => $states,
        "municipalities" => $municipalities]);
    }

    public function update(Request $request, $id)
    {
        //
        if(University::where('id','=',$id)->count() > 0){

            $this->validate($request,[
                'nombre' => ['required'],
                'tipo' => ['required','in:Publica,Privada'],
                'telefono' => ['required'],
                'url_web' => ['required','url'],
                'image' => ['image','mimes:jpg,png'],
                'id_municipio' => ['required','integer'],
                'latitud' => ['required','numeric'],
                'longitud' => ['required','numeric'],
            ]);

            $datos = request()->only(['nombre','tipo','direccion','telefono','url_web','image','id_municipio']);
            $universityBeforeUpdate = University::findOrFail($id);

            if(isset($request->nombre)){
                $datos['slug'] = Str::slug($request->nombre);
            }

            if($request->hasFile('image')){

                $university = University::findOrFail($id);
                Storage::delete('public/'.$university->image);
                $datos['image'] = $request->file('image')->store('universities','public');

            }

            University::where('id','=',$id)->update($datos);




        }

        return redirect()->route('universities.edit',$id);

    }


    public function map()
    {
        # code...


        return view('map', compact('initialMarkers'));
    }

}
