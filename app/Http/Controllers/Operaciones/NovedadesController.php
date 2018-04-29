<?php

namespace App\Http\Controllers\Operaciones;

use App\Models\Operaciones\Bus;
use App\Models\Operaciones\Departamento;
use App\Models\Operaciones\Empleado;
use App\Models\Operaciones\NovedadCAB;
use App\Models\Operaciones\OCNOVEDADOPERADORCAB;
use App\Models\Operaciones\OMBONO;
use App\Models\Operaciones\OMCONCLUACTUADOS;
use App\Models\Operaciones\Provincia;
use App\Models\Operaciones\Ruta;
use App\Models\Operaciones\ServRuta;
use App\Models\Operaciones\TablaDet;
use App\Models\Operaciones\TipoNovedad;
use App\Models\Operaciones\TipoNovedadDet;
use App\Models\Operaciones\Ubigeo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NovedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiponovedades= TablaDet::where('IdTipoData','TGRP')
	        ->where('IndRegistro', 'A')
            ->whereIn('IdCodigoData', [4,5])
            ->orderBy('Descripcion','asc')
            ->get();
        $especificaciones = TipoNovedad::where('IdGrupo', 4)
	        ->where('IndRegistro', 'A')
            ->orderBy('Descripcion','asc')
            ->get();
        $sentidos= TablaDet::where('IdTipoData','SENT')
	        ->where('IndRegistro', 'A')
            ->orderBy('Descripcion','asc')
            ->get();
        $informantes= TablaDet::where('IdTipoData','INFO')
	        ->where('IndRegistro', 'A')
            ->orderBy('Descripcion','asc')
            ->get();
        $departamentos = Departamento::orderBy('Descripcion','asc')
	        ->where('IndRegistro', 'A')
            ->get();
	    $tecnicos = Empleado::whereIn('IdPuesto', [90, 93])
		    ->where('EstadoTrabajador', 'A')
		    ->where('IndRegistro', 'A')
		    ->orderBy('Nombre', 'asc')
		    ->get();
	    $supervisores = Empleado::whereIn('IdPuesto', [90])
		    ->where('EstadoTrabajador', 'A')
		    ->where('IndRegistro', 'A')
		    ->orderBy('Nombre', 'asc')
		    ->get();
        $aseguradoras = TablaDet::where('IdTipoData','ASEG')
	        ->where('IndRegistro', 'A')
            ->orderBy('Descripcion','asc')
            ->get();
        $datos = [
            'tiponovedades' => $tiponovedades,
            'especificaciones' => $especificaciones,
            'sentidos' => $sentidos,
            'informantes' => $informantes,
            'departamentos' => $departamentos,
            'tecnicos' => $tecnicos,
            'supervisores' => $supervisores,
            'aseguradoras' => $aseguradoras,
        ];
        return view('operaciones.novedad.index',$datos);
    }
    public function novedadcierre()
    {
        $tiponovedades= TablaDet::where('IdTipoData','TGRP')
	        ->where('IndRegistro', 'A')
            ->whereIn('IdCodigoData', [4,5])
            ->orderBy('Descripcion','asc')
            ->get();
        $especificaciones = TipoNovedad::where('IdGrupo', 4)
	        ->where('IndRegistro', 'A')
            ->orderBy('Descripcion','asc')
            ->get();
        $sentidos= TablaDet::where('IdTipoData','SENT')
	        ->where('IndRegistro', 'A')
            ->orderBy('Descripcion','asc')
            ->get();
        $informantes= TablaDet::where('IdTipoData','INFO')
	        ->where('IndRegistro', 'A')
            ->orderBy('Descripcion','asc')
            ->get();
        $departamentos = Departamento::orderBy('Descripcion','asc')
	        ->where('IndRegistro', 'A')
            ->get();
	    $tecnicos = Empleado::whereIn('IdPuesto', [90, 93])
		    ->where('EstadoTrabajador', 'A')
		    ->where('IndRegistro', 'A')
		    ->orderBy('Nombre', 'asc')
		    ->get();
	    $supervisores = Empleado::whereIn('IdPuesto', [90])
		    ->where('EstadoTrabajador', 'A')
		    ->where('IndRegistro', 'A')
		    ->orderBy('Nombre', 'asc')
		    ->get();
        $aseguradoras = TablaDet::where('IdTipoData','ASEG')
	        ->where('IndRegistro', 'A')
            ->orderBy('Descripcion','asc')
            ->get();
	    $origen = TablaDet::where('IdTipoData','ORIN')
		    ->where('IndRegistro', 'A')
		    ->orderBy('Descripcion','asc')
		    ->get();
	    $inspectores= Empleado::whereIn('IdPuesto',[62,63])
		    ->where('EstadoTrabajador', 'A')
		    ->where('IndRegistro', 'A')
		    ->orderBy('Nombre','asc')
		    ->get();
	    $concluactuados = OMCONCLUACTUADOS::orderBy('Descripcion','asc')
		    ->where('IndRegistro', 'A')
		    ->get();
	    $ocurrencias = OMBONO::orderBy('Descripcion','asc')
		    ->where('IndRegistro', 'A')
		    ->get();
        $datos = [
            'tiponovedades' => $tiponovedades,
            'especificaciones' => $especificaciones,
            'sentidos' => $sentidos,
            'informantes' => $informantes,
            'departamentos' => $departamentos,
            'tecnicos' => $tecnicos,
            'supervisores' => $supervisores,
            'aseguradoras' => $aseguradoras,
	        'origenes' => $origen,
	        'concluactuados' => $concluactuados,
	        'ocurrencias' => $ocurrencias,
	        'inspectores' => $inspectores,
        ];
        return view('operaciones.novedad.novedadcerrar',$datos);
    }

	public function descbono(Request $request){
		$var1 = $request->input('var1');
		$dato = OMBONO::where('IdBono',$var1)
			->where('IndRegistro', 'A')
			->first();
		if(!$dato){
			return "No existes";
		}
		return $dato->Descuento;
	}

	public function registrar(Request $request)
	{
		$vars = $request->all();
		$cab = new OCNOVEDADOPERADORCAB;
		//$cab-> =$request->input('tiponovedad');
		$cab->IdTipoNovedad =$request->input('especificacion');
		$cab->FechaNovedad =$request->input('fecha');
		$cab->IdEmpleado =$request->input('codoperador');
		$cab->IdUnidad =$request->input('bus');
		$cab->IdServicio =$request->input('servicio');
		$cab->IdNovedadCHL =$request->input('checklist');
		$cab->IdEmpReemplazo =$request->input('codreemplazo');
		$cab->LugarPresentacion =$request->input('lugar');
		$cab->HoraPresentacion =$request->input('horapresentacion');
		$cab->LugarServicio =$request->input('lugarservicio');
		$cab->HoraServicio =$request->input('horaservicio');
		list($x1,$x2) = explode('-',$request->input('sentido'));
		$cab->IdSentidoServicio =$x2;
		list($x3,$x4) = explode('-',$request->input('informante'));
		$cab->IdInformaServicio = $x4;
		$cab->Especificacion =$request->input('datoespecifico');
		$cab->IdEmpTecnico =$request->input('tecnico');
		$cab->IdEmpSupervisor =$request->input('supervisor');
		$cab->DescripcionNovedad =$request->input('descripcion');
		$cab->FechaCierre =$request->input('fcierre');
		$cab->NumeroInforme =$request->input('ninforme');
		$cab->IdTipoOcurrencia =$request->input('ocurrencia');
		$cab->IndResponsabilidad =$request->input('bolresponsable');
		$cab->IdAccionDisciplinaria =$request->input('acciones');
		$bom = OMBONO::where('IdBono',$request->input('ocurrencia'))->first();
		$descbono = $bom->Descuento;
		$cab->MontoDsctoBono =$descbono;
		$cab->RegObservacion =$request->input('conocurrencia');
		$cab->IndRegistro = 'A';
		$cab->UsuarioCreacion = '1';
		$cab->EstadoCierre = 'S';
		$cab->save();
		return view('home');
	}
	public function regnovedad(Request $request)
	{
		$cab = new OCNOVEDADOPERADORCAB;
		//$cab-> =$request->input('tiponovedad');
		$cab->IdTipoNovedad =$request->input('especificacion');
		$cab->FechaNovedad =$request->input('fecha');
		$cab->IdEmpleado =$request->input('codoperador');
		$cab->IdUnidad =$request->input('bus');
		$cab->IdServicio =$request->input('servicio');
		$cab->IdNovedadCHL =$request->input('checklist');
		$cab->IdEmpReemplazo =$request->input('codreemplazo');
		$cab->LugarPresentacion =$request->input('lugar');
		$cab->HoraPresentacion =$request->input('horapresentacion');
		$cab->LugarServicio =$request->input('lugarservicio');
		$cab->HoraServicio =$request->input('horaservicio');
		list($x1,$x2) = explode('-',$request->input('sentido'));
		$cab->IdSentidoServicio =$x2;
		list($x3,$x4) = explode('-',$request->input('informante'));
		$cab->IdInformaServicio = $x4;
		$cab->Especificacion =$request->input('datoespecifico');
		$cab->IdEmpTecnico =$request->input('tecnico');
		$cab->IdEmpSupervisor =$request->input('supervisor');
		$cab->DescripcionNovedad =$request->input('descripcion');
		$cab->MontoDsctoBono = 0;
		$cab->RegObservacion =$request->input('conocurrencia');
		$cab->IndRegistro = 'A';
		$cab->UsuarioCreacion = '1';
		$cab->EstadoCierre = 'N';
		$cab->save();
		return view('home');
	}
}
