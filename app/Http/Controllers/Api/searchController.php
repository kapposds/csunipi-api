<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;  

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\GetFeed;

use App\Article;
use App\Page;
use App\Person;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class searchController extends Controller
{
	//News-----------------------------------------------------------------------------------------------------------------------
  	public function search_news(GetFeed $request, $input)
	{
	  $offset = $request->offset ?: 0; //if $request->offset is defined then $offset=$request->offset, else $offset=0
	  $limit = $request->limit ?: 5;

	  $input = Str::lower($input); //convert input to lowercase to prevent case sensitive issues
	  $input = preg_split('/\s+/', $input, null, PREG_SPLIT_NO_EMPTY);// split on 1+ whitespace & ignore empty (eg. trailing space)	 

      $news = Article::with('page')
	                    ->where(function($query) use($input) //nested $query needed to use for outside of $q
	                    {
	                    	foreach($input as $input)//compare every input word using AND
	      					{
		      					$query->where(function($q) use ($input)
		      					{   //title or alias or content must match with input[$i] (nested OR in ANDs)
			      					$q->where('title','like','%'.$input.'%')
			      						  ->orWhere('alias','like','%'.$input.'%')
					        		   	  ->orWhere('content','like','%'.$input.'%');
		      					});							      	
							}
	                    })
	  				   ->where('category', '=', 'department-news')//and where category='department-news'
	        		   ->orderBy('created_at', 'desc')	
	                   ->take($limit)
	                   ->skip($offset) 	    					    					
					   ->get();		

      return response()->json($news);
	} 

    public function count_news($input)
    {
      $input = Str::lower($input);
   	  $input = preg_split('/\s+/', $input, null, PREG_SPLIT_NO_EMPTY); 

      $news_quantity = Article::where(function($query) use($input) 
      					{
	                    	foreach($input as $input)
	      					{
		      					$query->where(function($q) use ($input)
		      					{
			      					$q->where('title','like','%'.$input.'%')
			      						  ->orWhere('alias','like','%'.$input.'%')
					        		   	  ->orWhere('content','like','%'.$input.'%');
		      					});							      	
							}
	                    })
      				   ->where('category', '=', 'department-news')
					   ->count();	     	

	  return response()->json($news_quantity);
    } 	


	//People---------------------------------------------------------------------------------------------------------------------
  	public function search_people(GetFeed $request, $input)
	{
   	  $input = Str::lower($input);
   	  $input = preg_split('/\s+/', $input, null, PREG_SPLIT_NO_EMPTY);
	  $offset = $request->offset ?: 0; 
	  $limit = $request->limit ?: 5;

	  $people = Person::where('divider','=','0') //only not dividers
	  					->where(function($query) use ($input)
	  					{//and where  (for every $input)
	  						foreach($input as $input)
	  						{
			  					$query->where(function($q) use($input)
			  					{//try to match something of the following (or)
		  							$q->where('fullname','like','%'.$input.'%')
		  							->orWhere('alias','like','%'.$input.'%')  							
		  							->orWhere('tags','like','%'.$input.'%')
									->orWhere('email','like','%'.$input.'%');
			 					});
			  				}
			  			})
	                    ->take($limit)
	                    ->skip($offset) 	    					    					
						->get();

	  return response()->json($people);
	} 

    public function count_people($input)
    {
   	  $input = Str::lower($input);
   	  $input = preg_split('/\s+/', $input, null, PREG_SPLIT_NO_EMPTY);

	  $people_quantity = Person::where('divider','=','0') //only not dividers
	  					->where(function($query) use ($input)
	  					{//and where (for every $input)
	  						foreach($input as $input)
	  						{
			  					$query->where(function($q) use($input)
			  					{//try to match something of the following (or)
		  							$q->where('fullname','like','%'.$input.'%')
		  							->orWhere('alias','like','%'.$input.'%')  							
		  							->orWhere('tags','like','%'.$input.'%')
									->orWhere('email','like','%'.$input.'%');
			 					});
			  				}
			  			})
						->count();

      return response()->json($people_quantity);
    } 	

    //Studies--------------------------------------------------------------------------------------------------------------------
  	public function search_studies(GetFeed $request, $input)
	{
   	  $input = Str::lower($input);
   	  $input = preg_split('/\s+/', $input, null, PREG_SPLIT_NO_EMPTY);   	  			
	  $offset = $request->offset ?: 0;
	  $limit = $request->limit ?: 5;

	  $studies_pages = Page::select('alias','category','title','content','created_at')
						->where(function($query) use ($input)
					    {//and where (for every $input)
							foreach($input as $input)
								{
									$query->where(function($q) use($input)
									{
									  $q->where('alias','like','%'.$input.'%')
					           			->orWhere('title','like','%'.$input.'%')
					        		   	->orWhere('content','like','%'.$input.'%');	
									});
								}
							})
						->where('category', '=', 'studies');//only for category='studies'

	  $studies = Article::select('alias','category','title','content','created_at')
						->with('page')	  
						->where(function($query) use ($input)
					    {//and where (for every $input)
							foreach($input as $input)
								{
									$query->where(function($q) use($input)
									{
									  $q->where('alias','like','%'.$input.'%')
					           			->orWhere('title','like','%'.$input.'%')
					        		   	->orWhere('content','like','%'.$input.'%');	
									});
								}
							})
						->where(function($q)
						{//and where
							$q->where('category', '=', 'postgraduate-general-info') //only for category='postgraduate-general-info'
							  ->orWhere('category', '=', 'msc-advanced-information-systems') //or 'msc-advanced-information-systems'
							  ->orWhere('category', '=', 'msc-informatics	');                //or msc-informatics	
						}		)
    	   		   	    ->union($studies_pages)			
	           		    ->orderBy('created_at', 'desc')	        		   	    
	                    ->take($limit)
	                    ->skip($offset) 	    					    					
						->get();							   	

	  return response()->json($studies);
	} 

    public function count_studies($input)
    {
   	  $input = Str::lower($input);
   	  $input = preg_split('/\s+/', $input, null, PREG_SPLIT_NO_EMPTY);

	  $studies_pages_quantity = Page::where(function($query) use ($input)
					    {//and where (for every $input)
							foreach($input as $input)
								{
									$query->where(function($q) use($input)
									{
									  $q->where('alias','like','%'.$input.'%')
					           			->orWhere('title','like','%'.$input.'%')
					        		   	->orWhere('content','like','%'.$input.'%');	
									});
								}
							}) 
						->where('category', '=', 'studies')//only for category='studies'
						->count();

	  $studies_articles_quantity = Article::where(function($query) use ($input)
					    {//and where (for every $input)
							foreach($input as $input)
								{
									$query->where(function($q) use($input)
									{
									  $q->where('alias','like','%'.$input.'%')
					           			->orWhere('title','like','%'.$input.'%')
					        		   	->orWhere('content','like','%'.$input.'%');	
									});
								}
							})
						->where(function($q)
						{//and where
							$q->where('category', '=', 'postgraduate-general-info')  //only for category='postgraduate-general-info'
							  ->orWhere('category', '=', 'msc-advanced-information-systems')//or 'msc-advanced-information-systems'
							  ->orWhere('category', '=', 'msc-informatics	');                //or msc-informatics	
						})
	               		->count();	

	 $studies_quantity = $studies_pages_quantity + $studies_articles_quantity;

      return response()->json($studies_quantity);
    } 	    

    //Other----------------------------------------------------------------------------------------------------------------------
  	public function search_other(GetFeed $request, $input)
	{
   	  $input = Str::lower($input);
   	  $input = preg_split('/\s+/', $input, null, PREG_SPLIT_NO_EMPTY);
	  $offset = $request->offset ?: 0; //if $request->offset is defined then $offset=$request->offset, else $offset=0
	  $limit = $request->limit ?: 5;

	  $other_pages = Page::select('alias','category','title','content',DB::raw('null as thumbnail'),'created_at')
						->where(function($query) use ($input)
					    {//and where (for every $input)
							foreach($input as $input)
								{
									$query->where(function($q) use($input)
									{
									  $q->where('alias','like','%'.$input.'%')
					           			->orWhere('title','like','%'.$input.'%')
					        		   	->orWhere('content','like','%'.$input.'%');	
									});
								}
							})  
						->where('category', '<>', 'studies');//only for category='studies'

	  $other = Article::select('alias','category','title','content','thumbnail','created_at')
						->with('page')	  
						->where(function($query) use ($input)
					    {//and where (for every $input)
							foreach($input as $input)
								{
									$query->where(function($q) use($input)
									{
									  $q->where('alias','like','%'.$input.'%')
					           			->orWhere('title','like','%'.$input.'%')
					        		   	->orWhere('content','like','%'.$input.'%');	
									});
								}
							}) 
						->where(function($q)
						{//and where (except categories)
						$q->where('category', '<>', 'postgraduate-general-info')        
						  ->where('category', '<>', 'msc-advanced-information-systems')
						  ->where('category', '<>', 'msc-informatics	')                 
						  ->where('category', '<>', 'department-news');                  
						})
    	   		   	    ->union($other_pages)			
	           		    ->orderBy('created_at', 'desc')	        		   	    
	                    ->take($limit)
	                    ->skip($offset) 	    					    					
						->get();				

	  return response()->json($other);
	} 

    public function count_other($input)
    {
   	  $input = Str::lower($input);
   	  $input = preg_split('/\s+/', $input, null, PREG_SPLIT_NO_EMPTY);

	  $other_pages_quantity = Page::where(function($query) use ($input)
					    {//and where (for every $input)
							foreach($input as $input)
								{
									$query->where(function($q) use($input)
									{
									  $q->where('alias','like','%'.$input.'%')
					           			->orWhere('title','like','%'.$input.'%')
					        		   	->orWhere('content','like','%'.$input.'%');	
									});
								}
							}) 
						->where('category', '<>', 'studies')//only for category='studies'
						->count();

	  $other_articles_quantity = Article::where(function($query) use ($input)
					    {//and where (for every $input)
							foreach($input as $input)
								{
									$query->where(function($q) use($input)
									{
									  $q->where('alias','like','%'.$input.'%')
					           			->orWhere('title','like','%'.$input.'%')
					        		   	->orWhere('content','like','%'.$input.'%');	
									});
								}
							})
						->where(function($q)
						{//and where (except categories)
						$q->where('category', '<>', 'postgraduate-general-info')      
						  ->where('category', '<>', 'msc-advanced-information-systems')
						  ->where('category', '<>', 'msc-informatics	')                 	
						  ->where('category', '<>', 'department-news');                 
						}) 					
						->count();	

	$other_quantity = $other_pages_quantity + $other_articles_quantity;

      return response()->json($other_quantity);
    } 	        
}
