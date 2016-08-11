<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User; 
use Hash; 

class UserController extends Controller{
    
    public function create(Request $request){

    	$this->validate($request,[
    		'name'                   => 'required|min:3|max:50|',  
    		'email'                  => 'required|email|unique:user',
    		'password'               => 'required|min:6|max:16|confirmed',
    		'password_confirmation'  => 'required',
    		'cpf'                    => 'required',
    		'phone'                  => 'required'
    	]); 

    	$user = new User(); 

    	$user->name     = $request->name; 
    	$user->email    = $request->email; 
    	$user->password = Hash::make($request->password);  
    	$user->cpf      = $request->cpf; 
    	$user->phone    = $request->phone; 
    
    	$user->save(); 

    	return [ 'status' => true ]; 
    }
}
