<?php

namespace App\Http\Controllers;

use App\SSAplicacion;
use Illuminate\Http\Request;

use App\Models\Cargo;

class CargoController extends Controller{
    public function listar(Request $request){
        $obj = new Cargo;
        $idarea = $request->input("idarea");
        $idselected = "";
        $datos = [
            "lista" => $obj->listar($idarea)
        ];
        return view('opciones',$datos);
    }
}
