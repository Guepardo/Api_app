<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model{
    protected $table = 'job'; 
    public $timestamps = true; 
    
    public function skills(){
    	return $this->belongsToMany('App\Skill', 'job_has_skill')->
    		   withTimestamps(); 
    }
    
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
