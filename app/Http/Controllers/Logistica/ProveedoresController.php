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
        //OBTENER EMAILS INDIVIDUALMENTE
        $all_emails =  $request->input("all_emails");
        //print_r($all_emails);
        $re = '/\d\#\w+\w\:/m';
        preg_match_all($re, $all_emails, $matches, PREG_SET_ORDER, 0);
        $n = "";
        foreach ($matches as $key => $value) {
            $value[0] = preg_replace("/#\w+\w:/m", "", strval($value[0]));
            $n = $n.strval($value[0]);
        }

        $emails_x_con = array();
        for($q = 1 ; $q <= strlen($n); $q++){
            array_push($emails_x_con, substr_count($n, $q));
        }
       array_pop($emails_x_con);
       //print_r($emails_x_con);
       //exit();
        $reg = '/\w+\w/m';
        preg_match_all($reg, $all_emails, $emails, PREG_SET_ORDER, 0);        
        $every_email = array();
        foreach ($emails as $key => $value) {
            array_push($every_email, $value[0]);
        }
        $c = 0;
        $cont_with_email = array();
        for($i = 0; $i < $request->input("total_contacts") ; $i++){
            $emailxcon = "";
            for($k=0;$k<$emails_x_con[$i];$k++){
                $emailxcon = $emailxcon.strval($every_email[$c]).".";
                $c++;
            }
            array_push($cont_with_email, $emailxcon);
        }
   
        //OBTENER CELUALRES INDIVIDUALMENTE
        $all_cels =  $request->input("all_cels");
        $re = '/\d\.\d+\d\:/m';
        preg_match_all($re, $all_cels, $matches, PREG_SET_ORDER, 0);
        $y = "";
        foreach ($matches as $key => $value) {
            $value[0] = preg_replace("/.\d+\d:/m", "", strval($value[0]));
            $y = $y.strval($value[0]);
        }
        
        $num_cels_x_con = array();
        for($q = 1 ; $q <= strlen($y); $q++){
            array_push($num_cels_x_con, substr_count($y, $q));
        }
       array_pop($num_cels_x_con);
       
        $reg = '/\d+\d/m';
        preg_match_all($reg, $all_cels, $cels, PREG_SET_ORDER, 0);        
        $every_cel = array();
        foreach ($cels as $key => $value) {
            array_push($every_cel, $value[0]);
        }
        $c = 0;
        $cont_with_cel = array();
        for($i = 0; $i < $request->input("total_contacts") ; $i++){
            $celxcon = "";
            for($k=0;$k<$num_cels_x_con[$i];$k++){
                $celxcon = $celxcon.strval($every_cel[$c]).".";
                $c++;
            }
            array_push($cont_with_cel, $celxcon);
        }
        print_r($cont_with_cel);

        // OBTENER TELEFONOS INDIVIDUALMENTE
        $all_tels =  $request->input("all_tels");
        $re = '/\d\.\d+\d\:/m';
        //echo $all_tels;
        preg_match_all($re, $all_tels, $matches, PREG_SET_ORDER, 0);
        $x = "";
        foreach ($matches as $key => $value) {
            $value[0] = preg_replace("/.\d+\d:/m", "", strval($value[0]));
            $x = $x.strval($value[0]);
        }
        
        $num_tels_x_con = array();
        for($z = 1 ; $z <= strlen($x); $z++){
            array_push($num_tels_x_con, substr_count($x, $z));
        }
       //array_pop($num_tels_x_con);
        //print_r($num_tels_x_con);
        
        
        $reg = '/\d+\d/m';
        preg_match_all($reg, $all_tels, $tels, PREG_SET_ORDER, 0);        
        $every_tel = array();
        foreach ($tels as $key => $value) {
            array_push($every_tel, $value[0]);
        }
        $c = 0;
        $cont_with_tel = array();
        for($i = 0; $i < $request->input("total_contacts") ; $i++){
            $telxcon = "";
            for($k=0;$k<$num_tels_x_con[$i];$k++){
                $telxcon = $telxcon.strval($every_tel[$c]).".";
                $c++;
            }
            array_push($cont_with_tel, $telxcon);
        }
       // print_r($cont_with_tel);



        //echo $x;

      // preg_match_all("/(.|:| )\d{1-2}(.|:| )/m", $x, $owners, PREG_SET_ORDER, 0);
        
        
        //$owners = preg_match_all("/\d/m", $x);
        //print_r($owners);
        
        //$exploded = explode(".", $all_tels);
      //  echo sizeof($exploded);
       // print_r($exploded);
        //$individual_tels_owners = explode("/", $all_tels);
        /*$individual_tels = preg_split("\d\.\d+\d\:", $all_tels);
        print_r($individual_tels);*/
        
        /*$to_print ="";
        $tels = array();
        $tels_owners = array();




        foreach ($individual_tels as $one) {
            $to_print = $to_print.strval($one)."\n";
        }*/
        //echo $to_print;
        // COMIENZO OBTENER CADA TELEFONO
       /* $all_tels =  $request->input("all_tels");
        $re = '/\d\.\d+\d\:/m';

        preg_match_all($re, $all_tels, $matches, PREG_SET_ORDER, 0);
        $x = "";
        foreach ($matches as $key => $value) {
            $value[0] = preg_replace("/.\d+\d:/m", "", strval($value[0]));
            $x = $x.strval($value[0]);
        }
        
        $num_tels_x_con = array();
        for($z = 1 ; $z <= strlen($x); $z++){
            array_push($num_tels_x_con, substr_count($x, $z));
        }
        array_pop($num_tels_x_con);
        array_pop($num_tels_x_con);        
        
        $reg = '/\d+\d/m';
        preg_match_all($reg, $all_tels, $tels, PREG_SET_ORDER, 0);        
        $every_tel = array();
        foreach ($tels as $key => $value) {
            array_push($every_tel, $value[0]);
        }
        $c = 0;
        $cont_with_tel = array();
        for($i = 0; $i < $request->input("total_contacts") ; $i++){
            $telxcon = "";
            for($k=0;$k<$num_tels_x_con[$i];$k++){
                $telxcon = $telxcon.strval($every_tel[$c]).".";
                $c++;
            }
            array_push($cont_with_tel, $telxcon);
        }
        print_r($cont_with_tel);*/
        // FINAL OBTENER CADA TELEFONO

    }

    public function multiexplode ($delimiters,$data) {
        $MakeReady = str_replace($delimiters, $delimiters[0], $data);
        $Return    = explode($delimiters[0], $MakeReady);
        return  $Return;
        }

    public function mostrar($id){
    	
    }
    public function editar(Request $request){
    	
    }
    public function eliminar($id){
    	
    }
}
