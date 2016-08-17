<?php  
namespace App\Http\Controllers; 

use Illuminate\Http\Request; 
use App\Http\Requests; 

use App\User; 
use Hash; 

class AuthenticationController extends Controller{

	public function getToken(Request $request){
		$this->validate($request,[
			'email'    => 'required|email', 
			'password' => 'required'
		]); 

		$email    = $request->email; 
		$password = $request->password; 

		$user = User::where('email', '=', $email)->
		get()-> 
		first();

		if(empty($user) || !Hash::check($password, $user->password))
			return ['status' => false ]; 

		$user->api_key = Hash::make($password + time() ); 
		$user->save(); 

		$msg = ['token' => $user->api_key]; 

		return [ 'status' => true, 'msg' => $msg ]; 
	}
}