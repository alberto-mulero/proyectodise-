<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universo;
use Illuminate\Support\Str;

class IndexAuthController extends Controller
{
    public function index(){

        $universos = Universo::paginate(5);
        // return $universo;
        return view('index',compact('universos'));
    }
    public function user($id){

        $universo = Universo::find($id);

        

        return view('index.user',compact('universo'));
    }
    public function admin($id){

        $universo = Universo::find($id);

        return view('index.admin',compact('universo'));
    }

    public function añadir(){
        return view('index.añadir');
    }

    public function store(Request $request){
        $universo = new Universo();

        $universo->nombre = $request->nombre;
        $universo->descripcion = $request->descripcion;
        $universo->temp_media = $request->temp_media;
        $universo->diametro = $request->diametro;
        $image = $request->file('imagen');
        $image->move('images/featureds', $image->getClientOriginalName());
        $universo->imagen = $image->getClientOriginalName();
        
        

        $universo->save();

        return redirect()->route('sesion');

        
    }


    public function edit($id){
        $universo = Universo::find($id);
        return view('index.edit',compact('universo'));
    }

    public function update(Request $request,$id){
        $universo = Universo::find($id);
        $universo->nombre = $request->nombre;
        $universo->descripcion = $request->descripcion;
        $universo->temp_media = $request->temp_media;
        $universo->diametro = $request->diametro;
        if($request->hasFile('imagen')){
            $image = $request->file('imagen');
            $image->move('images/featureds', $image->getClientOriginalName());
            $universo->imagen = $image->getClientOriginalName();
        }
        
             
        
        
        $universo->save();
        return redirect()->route('sesion');
    }

    public function destroy($id){
        $universo = Universo::find($id);
        $universo->delete();
        return redirect()->route('sesion');
    }


}
