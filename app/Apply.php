<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model{
    protected $table = 'apply'; 
    public $timestamps = true; 
    
    public function user(){
    	return $this->belongsTo('App\User'); 
    }
}
