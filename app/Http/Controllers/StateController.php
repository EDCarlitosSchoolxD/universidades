<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class StateController extends Controller
{
    //
    public function index(){
        $states = State::paginate();
        return view('admin.states',['data'=>$states]);
    }


    public function create(){
        return view('admin.state-create');
    }

    public function edit($id){

        $state = State::findOrFail($id);

        return view('admin.state-edit',["data" =>$state]);
    }


    public function store(Request $request)
    {

        $this->validate($request,[
            'estado' => ['required','unique:states'],
            'image' => ['image','required'],
        ]);


        $datos = request()->except('_token');
        $datos['slug'] = Str::slug($request->estado);

        if($request->hasFile('image')){
            $datos['image'] = $request->file('image')->store('states','public');
            State::create($datos);
        }

        return redirect()->route('admin.states');


    }

    public function update(Request $request, $id)
    {

        if(State::where('id','=',$id)->count() > 0){

            $this->validate($request,[
                'estado' => ['required'],
                'image' => ['image'],
            ]);


            $datos = request()->except('_token','_method');

            if(asset($request->estado)){
                $datos['slug'] = Str::slug($request->estado);
            }

            if($request->hasFile('image')){

                $stateBeforeUpdate = State::findOrFail($id);
                if(Storage::delete('public/'.$stateBeforeUpdate->image)){
                    $message['imageUpdate'] = 'Imagen Eliminada';
                }
                $datos['image'] = $request->file('image')->store('states','public');
            }
        }
        State::where('id','=',$id)->update($datos);

        return redirect()->route('states.edit',$id);
    }



    public function destroy($id){

        if(State::where('id','=',$id)->count() > 0){
            $state = State::findOrFail($id);
            Storage::delete('public/'.$state->image);
            State::destroy($id);

        }

        return redirect()->route('admin.states');

    }

}
