<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model{
    protected $table = 'user'; 
    public $timestamps = true; 
    
    public function applies(){
    	return $this->hasMany('App\Apply'); 
    }

    public function jobs(){
    	return $this->hasMany('App\Job'); 
    }
}
