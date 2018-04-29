<?php

namespace App\Http\Controllers\Logistica;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Ubigeo;
use App\Models\Rubro;

class ProveedoresController extends Controller{
    var $ubigeo;
    var $rubro;
    public function __construct(){
    	$this->ubigeo = new Ubigeo;
    	$this->rubro = new Rubro;
    }
    public function index(){
    	$datos = [
    		"regiones" => $this->ubigeo->listar("region")
    	];
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
