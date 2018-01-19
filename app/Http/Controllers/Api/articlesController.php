<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;  

use Illuminate\Http\Request;

use App\Http\Requests\GetFeed;
use App\Http\Requests\UpdateViewsDownloads;

use App\Article;

class articlesController extends Controller
{
    public function show_category(GetFeed $request, $category)
    {
      $offset = $request->offset ?: 0; //if $request->offset is defined then $offset=$request->offset, else $offset=0
      $limit = $request->limit ?: 5;

    	$articles = Article::where('category', $category)
                           ->orderBy('created_at', 'desc')
                           ->take($limit)
                           ->skip($offset)                           
                           ->get();

	    return response()->json($articles);
	    // return view('test', compact('article'));
    }

    public function count_category($category)
    {
      $articles_quantity = Article::where('category', $category)->count();

      return response()->json($articles_quantity);
    }   

    public function show($category,$article)
    {
        $articles = Article::where([
                                        ['category', $category],
                                        ['alias',  $article],
                                   ])->get();        

        return response()->json($articles);
    }    


    public function update(UpdateViewsDownloads $request, $category, $article)
    {
      $article = Article::where([
                                        ['category', $category],
                                        ['alias',  $article],
                                   ])->first(); //first() instead of get, in order to make update() work

        //validate if requests views/downloads are integers
        $article->views = is_int($request->views) ? $request->views : $article->views ;
        $article->downloads = is_int($request->downloads) ? $request->downloads : $article->downloads ;

        //if changes made to model since it was queried from databse save changes and return response
        if($article->isDirty('views')){
            $article->save();
            return response()->json(['update_success' => 'true', 'updated_views' => $request->views]);
        }
        if($article->isDirty('downloads')){
            $article->save();
            return response()->json(['update_success' => 'true', 'updated_downloads' => $request->downloads]);
        }
        if(!$article->isDirty()){
            return response()->json(['update_success' => 'false']);
        }

      }
}
