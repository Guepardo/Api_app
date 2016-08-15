<?php 
namespace App\Http\Controllers; 

use Illuminate\Http\Request; 
use App\Http\Requests; 

use App\Category;

class CategoryController extends Controller{

	public function getAllCategories(){
		return Category::all(); 
	}


	public function getSubCategories(Request $request){
		$this->validate($request,[
			'id'  => 'required'
		]); 

		$id = $request->id; 
		
		$category = Category::find($id); 
		$category->subCategories; 
		return $category;  
	}
}