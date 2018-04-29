<?php

namespace App\Models\Operaciones;

use Illuminate\Database\Eloquent\Model;

class OCNOVEDADOPERADORCAB extends Model
{
	protected $table = "OCNOVEDADOPERADORCAB";
	protected $primaryKey = "IdNovedadOPE";
	public $timestamps = false;

	public function empleado()
	{
		return $this->belongsTo('App\Models\Operaciones\Empleado', 'IdEmpleado', 'IdEmpleado');
	}
}
