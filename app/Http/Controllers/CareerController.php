<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class CareerController extends Controller
{
    //



    public function store(Request $request){

        $this->validate($request,[
            'carera' => ['required','unique:careers'],
            'descripcion' => ['required','min:20'],
            'objetivo' => ['required','min:20'],
            'aprendizaje' => ['required','min:20'],
            'trabajo' => ['required','min:20'],
            'perfil_ingreso' => ['required','min:20'],
            'perfil_egreso' => ['required','min:20'],
            'plan_estudio' => ['required','mimes:jpg,png,pdf'],
            'image' => ['required','image'],
            'tipo' => ['in:Ingenieria,Maestria,Licenciatura','required'],
            'id_universidad' => ['required'],
        ]);

        $datos = request()->only(['carera','tipo','descripcion','objetivo','aprendizaje','trabajo','perfil_ingreso','perfil_egreso','plan_estudio'
        ,'image','id_universidad','plan_estudio']);

        $datos['slug'] = Str::slug($request->carera);
        $datos['likes'] = 0;


        $datos['image'] =  $request->file('image')->store('careers','public');
        $datos['plan_estudio'] =  $request->file('plan_estudio')->store('plan_estudio','public');


        Career::create($datos);

        return redirect()->route('universities.show',University::findOrFail($datos['id_universidad'])->slug);
    }


    public function destroy($slug,$id)
    {
        //
        $university = University::where('slug','=',$slug)->firstOrFail();

        if(Career::where('id','=',$id)->count() > 0){
            $career = Career::findOrFail($id);

            Storage::delete('public/'.$career->image);
            Storage::delete('public/'.$career->plan_estudio);

            Career::destroy($id);

        }

        return redirect()->route('universities.show',$university->slug);

    }

    public function update(Request $request,$id){
        if(Career::where('id','=',$id)->count() > 0){
            $this->validate($request,[
                'carera' => ['required'],
                'descripcion' => ['required','min:40'],
                'objetivo' => ['required'],
                'aprendizaje' => ['required'],
                'trabajo' => ['required'],
                'perfil_ingreso' => ['required'],
                'perfil_egreso' => ['required'],
                'plan_estudio' => ['mimes:jpg,png,pdf'],
                'image' => ['mimes:jpg,png'],
                'tipo' => ['in:Ingenieria,Maestria,Licenciatura','required'],
                'id_universidad' => ['required'],
            ]);

            $datos = request()->only(['carera','tipo','descripcion','objetivo','aprendizaje','trabajo','perfil_ingreso','perfil_egreso','plan_estudio'
             ,'image','id_universidad']);

            $careerBeforeUpdate = Career::findOrFail($id);

             if(isset($request->carera)){
                $datos['slug'] = Str::slug($request->carera);
             }

             if($request->hasFile('image')){
                Storage::delete('public/'.$careerBeforeUpdate->image);
                $datos['image'] = $request->file('image')->store('careers','public');
            }

            if($request->hasFile('plan_estudio')){
                Storage::delete('public/'.$careerBeforeUpdate->plan_estudio);
                $datos['plan_estudio'] = $request->file('plan_estudio')->store('plan_estudio','public');
            }

            Career::where('id','=',$id)->update($datos);

        }

        return redirect()->route('career.edit',$id);

    }


    public function create($id){
        return view('admin.career-create',['id'=>$id]);
    }

    public function edit($id){
        $career = Career::findOrFail($id);
        return view('admin.career-edit',['data' => $career, 'id' => $career->id_universidad]);
    }

    public function show($slug,$slug2){
        $career = Career::where('slug','=',$slug2)->firstOrFail();
        return view('pages.career',["career" => $career]);
    }


}
