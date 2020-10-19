<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MPR;
use App\Models\MRecolectores;
use App\Models\detallesfk;

class ControladorGeneral extends Controller
{
    
    public function index (){
        return view('index');
    }
    
    //Detalles    
    public function inicio(){
        
        $datos=detallesfk::all();
        $rec=MRecolectores::all();
        $pr=MPR::all();
        
        return view('relacion')->with('datos',$datos)->with('rec',$rec)->with('pr',$pr);//mostrar relacion
    }
    public function eliminar($id){
        
        $dato=detallesfk::find($id);
        $dato->delete();
        
        return back();
    }
}
