<?php 
namespace App\Http\Controllers; 

use Illuminate\Http\Request; 
use App\Http\Requests; 

use App\Job; 

class JobController extends Controller{

	public function publish(Request $request){
		$this->validate($request,[
			'name'            => 'required', 
			'description'     => 'required', 
			'time_left'       => 'required', 
			'sub_category_id' => 'required',
			'skills_id'       => 'required'
		]); 

		$job = new Job(); 

		$job->name            = $request->name; 
		$job->description     = $request->description; 
		$job->time_left       = $request->time_left; 
		$job->sub_category_id = $request->sub_category_id;
		$job->user_id  		  = 3; 

		$job->save(); 
		
		$job->skills()->attach($request->skills_id); 

		return ['status' => true ];  
	}

	public function getJobById(Request $request){
		$this->validate($request,[
			'id'  => 'required'
		]); 

		$id = $request->id; 

		$job = Job::find($id); 
		$job->skills; 

		return $job; 
	}
}