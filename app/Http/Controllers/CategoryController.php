<?php 
namespace App\Http\Controllers; 

use Illuminate\Http\Request; 
use App\Http\Requests; 

use App\Category; 

class CategoryController extends Controller{

	public function getAllCategories(Request $request){
		return Category::all(); 
	}

}