<?php

namespace App\Models\Operaciones;

use Illuminate\Database\Eloquent\Model;

class NovedadCAB extends Model
{
	protected $table="OCNOVEDADCAB";

	public $timestamps = false;

	public function empleado()
	{
		return $this->belongsTo('App\Models\Operaciones\Empleado', 'IdEmpleado', 'IdEmpleado');
	}
}
