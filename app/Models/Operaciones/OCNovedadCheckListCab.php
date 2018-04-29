<?php

namespace App\Models\Operaciones;

use Illuminate\Database\Eloquent\Model;

class OCNovedadCheckListCab extends Model
{
    protected $table = "OCNOVEDADCHECKLISTCAB";
    protected $primaryKey = "IdNovedadCHL";
    public $timestamps = false;
    public function detalles(){
	   return $this->hasMany('App\Models\Operaciones\OCNovedadCheckListDet');
	}
}
