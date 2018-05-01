<?php

namespace App\Http\Controllers\Logistica;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Ubigeo;
use App\Models\Rubro;

class ProveedoresController extends Controller{
    var $ubigeo;
    var $rubro;
    public function __construct(){
        $this->middleware('auth');

    	$this->ubigeo = new Ubigeo;
    	$this->rubro = new Rubro;
    }
    public function index(){

        $idvista = "40";

        $user = Auth::user();
        $query = DB::table('ssperfilopcion')
                ->select('*')
                ->where('IdOpcion','=',$idvista)
                ->where('IdPerfil','=',DB::raw('(select IdPerfil from ssusuarioperfil where IdUsuario = 
(select IdUsuario from ssusuario where ssusuario.LoginName = "'.$user->LoginName.'"))'))
                ->get();
        foreach ($query as $q) {
            $datos = [
            "regiones" => $this->ubigeo->listar("region"),
            "btncrear" => $q->IndBotonCrear,
            "btnver" => $q->IndBotonVisualizar,
            "btneliminar" => $q->IndBotonEliminar,
            "btneditar" => $q->IndBotonModificar,
            "btnimprimir" => $q->IndBotonImprimir,
            "btnexportar" => $q->IndBotonExportar,
            ];
        }


    	/*$datos = [
    		"regiones" => $this->ubigeo->listar("region")
    	];*/
    	return view("logistica/proveedores/index",$datos);
    }
    public function nuevo(){
    	$datos = [
    		"regiones" => $this->ubigeo->listar("region"),
    		"rubros" => $this->rubro->all()
    	];
    	return view("logistica/proveedores/nuevo",$datos);
    }
    public function guardar(Request $request){
    	print_r($request->all());
    }
    public function mostrar($id){
    	
    }
    public function editar(Request $request){
    	
    }
    public function eliminar($id){
    	
    }
}
