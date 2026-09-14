<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HashController extends Controller
{
    public function index(){
        $mensaje="Eres GEI";
        return view('hash.index',['mensaje'=>$mensaje]);
    }
}
