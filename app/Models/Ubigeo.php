<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ubigeo extends Model
{
    protected $table="smubigeo";

    public $timestamps = false;

    public function listar($tipo,$idpadre=NULL){
    	if($tipo=='region'){
    		return $this->where('IdUbigeo', 'like', '%0000')->get();
    	}else if($tipo=='provincia'){
    		$pre_id = substr($idpadre,0,2);
    		return $this->where('IdUbigeo', 'like', $pre_id.'%00')
    					->where('IdUbigeo','<>',$idpadre)->get();
    	}else if($tipo=="distrito"){
    		$pre_id = substr($idpadre,0,4);
			return $this->where('IdUbigeo', 'like', $pre_id.'%')->get();
    	}else{
    		return array();
    	}
    }
}
