<?php

namespace App\Http\Controllers\Operaciones;

use App\Models\Operaciones\Bus;
use App\Models\Operaciones\Departamento;
use App\Models\Operaciones\Empleado;
use App\Models\Operaciones\NovedadCAB;
use App\Models\Operaciones\OMACCIONDISCIPLINARIA;
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

class FormatoDaniosController extends Controller
{
    public function index()
    {
        $tiponovedades= TablaDet::where('IdTipoData','TGRP')
            ->whereIn('IdCodigoData', [1, 2, 3])
	        ->where('IndRegistro', 'A')
            ->orderBy('Descripcion','asc')
            ->get();
	    $especificaciones = TipoNovedad::where('IdGrupo', 1)
		    ->where('IndRegistro', 'A')
		    ->orderBy('Descripcion','asc')
		    ->get();
	    $detalles= TipoNovedadDet::where('IdTipoNovedad', 1)
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
            ->orderBy('Nombre','asc')
            ->get();
	    $supervisores = Empleado::whereIn('IdPuesto', [90])
		    ->where('EstadoTrabajador', 'A')
		    ->where('IndRegistro', 'A')
            ->orderBy('Nombre','asc')
            ->get();
	    $aseguradoras = TablaDet::where('IdTipoData','ASEG')
		    ->where('IndRegistro', 'A')
		    ->orderBy('Descripcion','asc')
		    ->get();
	    $distritos = Ubigeo::orderBy('Descripcion','asc')
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
            'detalles' => $detalles,
	        'aseguradoras' => $aseguradoras,
	        'distritos' => $distritos,
        ];
        return view('operaciones.formdanios.formdanios',$datos);
    }
    public function cerrar()
    {
        $tiponovedades= TablaDet::where('IdTipoData','TGRP')
	        ->where('IndRegistro', 'A')
            ->whereIn('IdCodigoData', [1, 2, 3])
            ->orderBy('Descripcion','asc')
            ->get();
	    $especificaciones = TipoNovedad::where('IdGrupo', 1)
		    ->where('IndRegistro', 'A')
		    ->orderBy('Descripcion','asc')
		    ->get();
	    $detalles= TipoNovedadDet::where('IdTipoNovedad', 1)
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
	    $distritos = Ubigeo::orderBy('Descripcion','asc')
		    ->where('IndRegistro', 'A')
		    ->get();
	    $origen = TablaDet::where('IdTipoData','ORIN')
		    ->where('IndRegistro', 'A')
		    ->orderBy('Descripcion','asc')
		    ->get();
	    $concluactuados = OMCONCLUACTUADOS::orderBy('Descripcion','asc')
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
            'detalles' => $detalles,
	        'aseguradoras' => $aseguradoras,
	        'distritos' => $distritos,
	        'origenes' => $origen,
	        'concluactuados' => $concluactuados,
        ];
        return view('operaciones.formdanios.formdanioscerrar',$datos);
    }

	public function accionesd(Request $request)
	{
		$acciones = OMACCIONDISCIPLINARIA::orderBy('Descripcion','asc')
			->where('IndRegistro', 'A')
			->get();
		$datos = [
			'acciones'=>$acciones,
		];
		return view('operaciones.formdanios.lista3',$datos);
	}
	public function especificacion(Request $request)
	{
		$var1 = $request->input('tiponovedad');
		list($tipodata,$codigodata) = explode('-',$var1);
		$dato = TipoNovedad::where('IdGrupo', $codigodata)
			->where('IndRegistro', 'A')
			->orderBy('Descripcion','asc')
			->get();
		$datos = [
			'datos' => $dato,
		];
		return view('operaciones.formdanios.lista',$datos);
    }
	public function detalle(Request $request)
	{
		$var1 = $request->input('especificacion');
		$dato = TipoNovedadDet::where('IdTipoNovedad', $var1)
			->where('IndRegistro', 'A')
			->orderBy('Descripcion','asc')
			->get();
		$datos = [
			'datos' => $dato,
		];
		return view('operaciones.formdanios.lista2',$datos);
    }
	public function placa(Request $request){
		$var1 = $request->input('bus');
		$dato = Bus::where('IdBus',$var1)
			->where('IndRegistro', 'A')
			->first();
		if(!$dato){
			return "NO EXISTE";
		}
		return $dato->Placa;
	}
	public function route(Request $request){
		$var1 = $request->input('servicio');
		$dato = ServRuta::where('IdServicio',$var1)
			->where('IndRegistro', 'A')
			->first();
		if(!$dato){
			return "NO EXISTE";
		}
		$idruta = $dato->IdRuta;
		$rout = Ruta::where('IdRuta',$idruta)
			->where('IndRegistro', 'A')
			->first();
		return $rout->Descripcion;
	}
	public function nombreoperador(Request $request){
		$var1 = $request->input('codoperador');
		$dato = Empleado::where('CodigoPT', $var1)
			->whereNotNull('CodigoPT')
			->where('EstadoTrabajador', 'A')
			->where('IndRegistro', 'A')
			->first();
		if(!$dato){
			return "NO EXISTE";
		}
		return $dato->Nombre . ' ' . $dato->ApellidoPaterno;
	}
	public function idoperador(Request $request){
		$var1 = $request->input('codoperador');
		$dato = Empleado::where('CodigoPT', $var1)
			->whereNotNull('CodigoPT')
			->where('EstadoTrabajador', 'A')
			->where('IndRegistro', 'A')
			->first();
		if(!$dato){
			return "NO EXISTE";
		}
		return $dato->IdEmpleado;
	}
    public function provincias(Request $request){
        $var1 = $request->input('dep');
        $dato = Provincia::where('IdDepartmento',$var1)
	        ->where('IndRegistro', 'A')
            ->orderBy('Descripcion','asc')
            ->get();
        $datos = [
            'dato' => $dato,
        ];
        return view('prueba2',$datos);
    }
    public function distritos(Request $request){
        $var1 = $request->input('dis');
        list($idprov,$iddep) = explode('-',$var1);
        $dato = Ubigeo::where('IdProvincia', $idprov)
	        ->where('IndRegistro', 'A')
            ->where('IdDepartamento', $iddep)
            ->orderBy('Descripcion','asc')
            ->get();
        $datos = [
            'dato' => $dato,
        ];
        return view('prueba3',$datos);
    }

	public function regdanioscierre(Request $request)
	{
		$cab = new NovedadCAB;
		list($x1,$x2) = explode('-',$request->input('tiponovedad'));
		$cab->IdTipoNovedad = $x2;
		$cab->IdDetalleNov = $request->input('especificacion');
		$cab->IdSubDetalle = $request->input('detalle');
		$cab->FechaNovedad = $request->input('fecha');
		$cab->IdEmpleado = $request->input('codoperador');
		$cab->IdUnidad = $request->input('bus');
		$cab->IdServicio = $request->input('servicio');
		$cab->DanoUnidad = $request->input('detalle2');
		$cab->IdEmpTecnico = $request->input('tecnico');
		$cab->Descripcion = $request->input('descripcion');
		$cab->Procedimiento = $request->input('procedimiento');
		$cab->Comisaria = $request->input('comisaria');
		$cab->CentroAtencion = $request->input('clinica');
		list($x3,$x4) = explode('-',$request->input('aseguradora'));
		$cab->IdAseguradora = $x4;
		$cab->NombreProcurador = $request->input('precurador');
		$cab->NroSiniestro = $request->input('siniestro');
		$cab->KilometroPerdido = $request->input('kilometraje');
		$cab->DanoDiagnostico = $request->input('desdanio');
		$cab->FechaCierre = $request->input('fcierre');
		$cab->NumeroInforme = $request->input('ninforme');
		$cab->IndResponsabilidad = $request->input('bolresponsable');
		$cab->IdAccionDisciplinaria = $request->input('acciones');
		$cab->MontoDano = $request->input('montodaño');
		$cab->MontoDosajePeritaje = $request->input('montodosaje');
		$cab->MontoConciliado = $request->input('montoconciliado');
		$cab->ActivacionPoliza = $request->input('montopoliza');
		$cab->DescuentoOperador = $request->input('montodesc');
		$cab->IdEscalaMonto = $request->input('escala');
		list($x5,$x6) = explode('-',$request->input('origen'));
		$cab->IdOrigenNovedad = $x6;
		$cab->IdConclusionActuado = $request->input('conclusiones');
		$cab->RegObservacion = $request->input('conocurrencia');
		$cab->IndRegistro = 'A';
		$cab->UsuarioCreacion = '1';
		$cab->EstadoCierre = 'S';
		$cab->save();
		/*$cab-> = $request->input('lugar');
		$cab-> = $request->input('hora');
		$cab-> = $request->input('sentido');
		$cab-> = $request->input('informante');
		$cab-> = $request->input('supervisor');
		$cab-> = $request->input('usuario');
		$cab-> = $request->input('dni');
		$cab-> = $request->input('telefono');
		$cab-> = $request->input('direccion');
		$cab-> = $request->input('distrito');
		$cab-> = $request->input('conductor');
		$cab-> = $request->input('licencia');
		$cab-> = $request->input('placatercero');
		$cab-> = $request->input('marca');*/
		return view('home');
    }
	public function regdanios(Request $request)
	{
		$cab = new NovedadCAB;
		list($x1,$x2) = explode('-',$request->input('tiponovedad'));
		$cab->IdTipoNovedad = $x2;
		$cab->IdDetalleNov = $request->input('especificacion');
		$cab->IdSubDetalle = $request->input('detalle');
		$cab->FechaNovedad = $request->input('fecha');
		$cab->IdEmpleado = $request->input('codoperador');
		$cab->IdUnidad = $request->input('bus');
		$cab->IdServicio = $request->input('servicio');
		$cab->DanoUnidad = $request->input('detalle2');
		$cab->IdEmpTecnico = $request->input('tecnico');
		$cab->Descripcion = $request->input('descripcion');
		$cab->Procedimiento = $request->input('procedimiento');
		$cab->Comisaria = $request->input('comisaria');
		$cab->CentroAtencion = $request->input('clinica');
		list($x3,$x4) = explode('-',$request->input('aseguradora'));
		$cab->IdAseguradora = $x4;
		$cab->NombreProcurador = $request->input('precurador');
		$cab->NroSiniestro = $request->input('siniestro');
		$cab->KilometroPerdido = $request->input('kilometraje');
		$cab->DanoDiagnostico = $request->input('desdanio');
		$cab->MontoDano = 0;
		$cab->MontoDosajePeritaje = 0;
		$cab->MontoConciliado = 0;
		$cab->ActivacionPoliza = 0;
		$cab->DescuentoOperador = 0;
		$cab->IndRegistro = 'A';
		$cab->UsuarioCreacion = '1';
		$cab->EstadoCierre = 'N';
		$cab->save();
		/*$cab-> = $request->input('lugar');
		$cab-> = $request->input('hora');
		$cab-> = $request->input('sentido');
		$cab-> = $request->input('informante');
		$cab-> = $request->input('supervisor');
		$cab-> = $request->input('usuario');
		$cab-> = $request->input('dni');
		$cab-> = $request->input('telefono');
		$cab-> = $request->input('direccion');
		$cab-> = $request->input('distrito');
		$cab-> = $request->input('conductor');
		$cab-> = $request->input('licencia');
		$cab-> = $request->input('placatercero');
		$cab-> = $request->input('marca');*/
		return view('home');
    }
	public function registrar(Request $request)
	{
		$var = $request->all();
		$datos = [
			'request' => $var,
		];
		return view('operaciones.formdanios.prueba3',$datos);
	}
}
