<?php
namespace App\Http\Controllers; 

use Illuminate\Http\Request; 
use App\Http\Requests; 

use App\Category; 
use App\Skill; 

class SkillController extends Controller{

	public function getSkillByCategory(Request $request){
		$this->validate($request,[
			'id'  => 'required'
		]); 

		$id = $request->id; 

		$category = Category::find($id);
		$category->skills;  

		return $category; 
	}

	public function getSkillsByMatch(Request $request){
		$this->validate($request,[
			'match' => 'required'
		]); 

		$match = $request->match.'%'; 
		
		$skills = Skill::where('name', 'like', $match)->take(10)->get(); 
		return $skills; 
	}
}