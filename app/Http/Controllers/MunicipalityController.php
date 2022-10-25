<?php

namespace App\Http\Controllers;

use App\Models\Municipality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

