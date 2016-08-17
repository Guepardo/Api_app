<?php 
namespace App\Http\Controllers; 

use Illuminate\Http\Request; 
use App\Http\Requests; 

use App\Apply; 

class ApplyController extends Controller{
	public function apply(Request $request){
		$this->validate($request, [
			'comment' => 'required|max:2000', 
			'job_id'  => 'required',
			'budget'  => 'required'
		]); 

		$apply = new Apply(); 
 
		$apply->user_id = 4; 
		$apply->job_id  = $request->job_id; 
		$apply->comment = $request->comment;  
		$apply->budget  = $request->budget; 

		$apply->save(); 

		return ['status' => true ]; 
	}
}