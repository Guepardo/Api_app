<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model{
    protected $table = 'category'; 
 	
 	public function subCategories(){
 		return $this->hasMany('App\SubCategory'); 
 	}

 	public function skills(){
 		return $this->hasMany('App\Skill'); 
 	}
 	
}
