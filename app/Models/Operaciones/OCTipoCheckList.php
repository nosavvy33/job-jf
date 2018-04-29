<?php

namespace App\Models\Operaciones;

use Illuminate\Database\Eloquent\Model;

class OCTipoCheckList extends Model
{
    protected $table = "OCTIPOCHECKLIST";
    protected $primaryKey = "IdTipoCHL";
    public $timestamps = false;
    public function detalles(){
	   return $this->hasMany('App\Models\Operaciones\OCNovedadCheckListDet');
	}
}
