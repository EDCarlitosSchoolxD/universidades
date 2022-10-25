<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StateController extends Controller
{
    //
    public function index(){
        $states = State::paginate();
        return view('admin.states',['data'=>$states]);
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
