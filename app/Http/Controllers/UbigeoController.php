<?php

namespace App\Http\Controllers;

use App\SSAplicacion;
use Illuminate\Http\Request;

use App\Models\Ubigeo;

class UbigeoController extends Controller{
    public function listar(Request $request){
        $obj = new Ubigeo;
        $tipo = $request->input("tipo");
        $idubigeo = $request->input("idubigeo");
        $idselected = "";
        $datos = [
            "lista" => $obj->listar($tipo,$idubigeo)
        ];
        return view('opciones',$datos);
    }
}
