<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mrecolectores;

class CRecolectores extends Controller
{
    public function inicio(){
        
        $datos=Mrecolectores::all()->filter();
        //$datos=array_filter($todo);
        
        //return ($datos);
        return view('recolectores/recolectores')->with('datos',$datos);
        
    }
    
    public function submit(Request $request){
        
        $datosdelform = new MRecolectores;
        $datosdelform->nombre = $request->nombre;
        
        //$dias->dias['dias'] = $request->input('dias');//
        
        //si no los inicializo en 0 no me inserta nada
        $datosdelform->lunes=0;
        $datosdelform->martes=0;
        $datosdelform->miercoles=0;
        $datosdelform->jueves=0;
        $datosdelform->viernes=0;
        $datosdelform->sabado=0;
        $datosdelform->domingo=0;
        
        //si exite la cadena regresa un 1
        $datosdelform->lunes=$request->has('lunes');
        $datosdelform->martes=$request->has('martes');
        $datosdelform->miercoles=$request->has('miercoles');
        $datosdelform->jueves=$request->has('jueves');
        $datosdelform->viernes=$request->has('viernes');
        $datosdelform->sabado=$request->has('sabado');
        $datosdelform->domingo=$request->has('domingo');
        
        $datosdelform->save();
        
        return back();
        
    }
    
    public function editar($id){
        
        //buscar el dato
        
        $dato=MRecolectores::find($id);
    
        //pasar el dato a la vista
        //return (22);
        return view('recolectores/editarrec')->with('dato',$dato);
    }
    
    public function guardaredicion(Request $request){
        
        $losdatos=MRecolectores::find($request->id);
        if(!is_null($losdatos)){
            //$losdatos=$request->id;
            $losdatos->nombre = $request->nombre;
            $losdatos->save();
        }
        
        return redirect(route('r-index'));
    }
    public function eliminar($id){
        
        $dato=MRecolectores::find($id);
        $dato->delete();
        
        return redirect(route('r-rec'));
    }
}
