<?php

namespace App\Http\Controllers\Operaciones;

use App\Models\Operaciones\NovedadCAB;
use App\Models\Operaciones\OCNOVEDADOPERADORCAB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ReportesController extends Controller
{
	public function danios(){

	}

	public function listnovedad()
	{
		$novedades = OCNOVEDADOPERADORCAB::orderBy('IdNovedadOPE', 'asc')->get();
		$datos = [
			'novedades' => $novedades,
		];
		return view('operaciones.reportes.rnovedadope', $datos);
	}

	public function listdanios()
	{
		$novedades = NovedadCAB::all();
		$datos = [
			'novedades' => $novedades,
		];
		return view('operaciones.reportes.rnovedadanio', $datos);
	}

	public function novedad(){
		\Excel::create('REPORTE_NOVEDAD_CHL', function($excel) {
			$excel->sheet('REPORTE_NOVEDAD_CHL', function($sheet) {
				$cabecera = array(
					'A'=>'FECHA',
					'B'=>'N° INFORME FINAL/REPORTE',
					'C'=>'TIPO DE OCURRENCIA',
					'D'=>'RESPONSABILIDAD',
					'E'=>'COD OPERADOR PT',
					'F'=>'COD OPERADOR PM',
					'G'=>'NOMBRE DEL OPERADOR',
					'H'=>'TIPO DE OPERADOR',
					'I'=>'ESTADO OPERADOR',
					'J'=>'LUGAR DE LA OCURRENCIA',
					'K'=>'TIPO DE JORNADA',
					'L'=>'HORA DE OCURRENCIA',
					'M'=>'SERVICIO',
					'N'=>'TABLA',
					'O'=>'DETALLE DE LA OCURRENCIA',
					'P'=>'CONSECUENCIA DE OCURRENCIA',
					'Q'=>'INSPECTOR QUE REPORTA',
					//'R'=>'KM PERDIDOS',
					'R'=>'ACCION DISCIPLINARIA',
					'S'=>'DESCUENTO DEL BONO',
					'T'=>'FECHA DE CIERRE'
				);
				$sheet->setHeight(1, 24);
				foreach ($cabecera as $k => $v) {
					$sheet->cell($k.'1', function($cell) use($v) {
						$cell->setValue($v)
							->setBackground('#082060')
							->setFont(array(
								'family'     => 'Calibri',
								'size'       => '9',
								'bold'       =>  true
							))->setFontColor('#ffffff')
							->setAlignment('center')
							->setValignment('center');
					});
					if($k=='D' || $k=='P'){
						$widthCell = '13.5';
					}else{
						$widthCell = '11.5';
					}
					$sheet->getStyle($k.'1')->getAlignment()->setWrapText(true);
					$sheet->setWidth($k, $widthCell);
				}
				$cont = 2;
				$data = DB::table('OCNOVEDADOPERADORCAB AS N')
					->select('FechaNovedad', 'NumeroInforme', 'Especificacion', 'IndResponsabilidad', 'R.CodigoPT', 'N.IdEmpleado', DB::raw("CONCAT(R.ApellidoPaterno, ' ', R.Nombre) AS Nombre"),'P.Descripcion','R.IndRegistro','LugarPresentacion',DB::raw("CASE WHEN [HoraPresentacion] >'12:00' THEN 'Mañana' ELSE 'Tarde' END as TipoJornada"),'HoraPresentacion','N.IdServicio','OR.Descripcion','DescripcionNovedad','N.RegObservacion',DB::raw("CONCAT(Insp.ApellidoPaterno, ' ', Insp.Nombre) AS Insperctor"),'AD.Descripcion','MontoDsctoBono','FechaCierre')
					->leftjoin('RAEMPLEADO AS R', 'R.IdEmpleado', '=', 'N.IdEmpleado')
					->leftjoin('RAPUESTO AS P', 'P.IdPuesto', '=', 'R.IdPuesto')
					->leftjoin('OPSERVRUTA AS SR', 'SR.IdServicio', '=', 'N.IdServicio')
					->leftjoin('OPRUTA AS OR', 'OR.IdRuta', '=', 'SR.IdRuta')
					->leftjoin('RAEMPLEADO AS Insp', 'Insp.IdEmpleado', '=', 'N.IdEmpSupervisor')
					->leftjoin('OMACCIONDISCIPLINARIA AS AD', 'AD.IdAccionD', '=', 'N.IdAccionDisciplinaria')
					->get()->toArray();
				foreach ($data as $item) {
					$sheet->row($cont, (array)$item);
					$cont++;
				}
			});
		})->export('xls');
	}
}
