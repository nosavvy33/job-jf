<?php

namespace App\Models\Operaciones;

use Illuminate\Database\Eloquent\Model;

class OCNovedadCheckListDet extends Model
{
    protected $table="OCNOVEDADCHECKLISTDET";
    public $timestamps = false;
    public function cabecera(){
	   return $this->belongsTo('App\Models\Operaciones\OCNovedadCheckListCab');
	}
}
