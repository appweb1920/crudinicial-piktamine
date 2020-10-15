<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorGeneral extends Controller
{
    public function index(){
        return view('index');
    }
    
}
