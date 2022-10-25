<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
}
