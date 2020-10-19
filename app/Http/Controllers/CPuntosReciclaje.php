<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MPR;
use App\Models\MRecolectores;
use App\Models\detallesfk;
    
class CPuntosReciclaje extends Controller
{
    public function inicio(){
        
        $datos=MPR::all()->filter();
        $rec=MRecolectores::all();
        
        return view('pr/pr')->with('datos',$datos)->with('rec',$rec);
    }
    
    public function submit(Request $request){
        
        $datosdelform = new MPR;
        
        $datosdelform->direccion = $request->direccion;
        $datosdelform->tipodebasura = $request->tipo;
        $datosdelform->horaapertura=$request->ha;
        $datosdelform->horacierre=$request->hc;
        
        $datosdelform->save();
        
        return back();
    }
    
    public function editar($id){
        
        //buscar el dato
        $dato=MPR::find($id);
    
        //pasar el dato a la vista
        //return (22);
        return view('pr/editapr')->with('dato',$dato);
    }
    
    public function guardaredicion(Request $request){
        
        $datosnuevos=MPR::find($request->id);
        //$datosnuevos = new MPR; 
        if(!is_null($datosnuevos)){
        
        $datosnuevos->direccion = $request->direccion;
        $datosnuevos->tipodebasura = $request->tipo;
        $datosnuevos->horaapertura= $request->ha;
        $datosnuevos->horacierre= $request->hc;
        
        $datosnuevos->save();
            
        }
        
        return redirect(route('r-pr'));
    }
    
    public function eliminar($id){
        
        $dato=MPR::find($id);
        $dato->delete();
        
        return redirect(route('r-pr'));
    }
    
    public function submitrel(Request $request){
        $datosdelform = new detallesfk;
        
        $datosdelform->idrec=$request->rec;
        $datosdelform->idpr=$request->pr;
        
        $datosdelform->save();
        
        return redirect(route('r-det'));
    }
}
