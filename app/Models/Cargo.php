<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table="smcargo";

    public $timestamps = false;

    public function listar($idarea){
    	return $this->where('IdArea', '=', $idarea)->get();
    }
}