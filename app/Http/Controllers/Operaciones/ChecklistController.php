<?php

namespace App\Http\Controllers\Operaciones;

use App\Models\Operaciones\OMTablaCab;
use App\Models\Operaciones\OCTipoCheckList;
use App\Models\Operaciones\OCNovedadCheckListCab;
use App\Models\Operaciones\OCNovedadCheckListDet;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChecklistController extends Controller
{
	public function index()
	{
		$tiponovedades= OMTablaCab::where('IdTipoData','ECHL')->orderBy('Descripcion','asc')->get();
		$descripciones = OCTipoCheckList::All();
        $datos = [
            'tiponovedades' => $tiponovedades,
            'descripciones' => $descripciones,
        ];
		return view('operaciones.checklist.checklist',$datos);
    }
    public function registrar(Request $request)
    {
        $vars = $request->all();
		$cab = new OCNovedadCheckListCab;
		$cab->FechaNovedad = $request->input('txtFecha');
		$cab->IdEmpleado = $request->input('txtCodProt');
		$cab->IdUnidad = $request->input('txtUnidad');
		$cab->CodigoCHL = $request->input('cmbTipoNovedad');
		//$cab->Observacion = '';
		//$cab->RegObservacion = '';
		$cab->IndRegistro = 'A';
		$cab->UsuarioCreacion = '1';
		$cab->FechaCreacion = date('Y-m-d H:i:s');
		$cab->save();
		$txtDescripcion = $request->input('txtDescripcion');
		$chkDescripcion = $request->input('chkDescripcion');
		$total = count($chkDescripcion);
		$detalles = array();
		for($i=0;$i<$total;$i++){
			$det = new OCNovedadCheckListDet;
			$det->IdNovedadCHL = $cab->IdNovedadCHL;
			$det->IdTipoCHL = $chkDescripcion[$i];
			$det->Descripcion = $txtDescripcion[$i];
			//$det->RegObservacion = '';
			$det->IndRegistro = 'A';
			$det->UsuarioCreacion = '1';
			$det->FechaCreacion = date('Y-m-d H:i:s');
			$det->save();
		}
		return view('dashboard');
    }
}
