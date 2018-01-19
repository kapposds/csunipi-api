<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;  

use Illuminate\Http\Request;

use App\Http\Requests\GetFeed;

use App\Person;

class peopleController extends Controller
{
	public function show_category($category)
	    {
	    	$people = Person::where('category', $category) 
	    					->get();

		    return response()->json($people);
	    }  
}
