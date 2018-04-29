<?php

namespace App\Models\Operaciones;

use Illuminate\Database\Eloquent\Model;

class TablaDet extends Model
{
    protected $table = 'OMTABLADET';

    public $timestamps = false;

    public function especificaciones()
    {
        return $this->hasMany('App\Models\Operaciones\TipoNovedad','IdGrupo','IdCodigoData');
    }
}
