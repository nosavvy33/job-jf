<?php

namespace App\Models\Operaciones;

use Illuminate\Database\Eloquent\Model;

class TipoNovedad extends Model
{
    protected $table = 'OCTIPONOVEDAD';

    public $timestamps = false;

    public function detalles()
    {
        return $this->hasMany('App\Models\Operaciones\TipoNovedadDet','IdTipoNovedad','IdTipoNovedad');
    }
}
