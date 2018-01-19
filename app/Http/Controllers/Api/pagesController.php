<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;  

use Illuminate\Http\Request;

use App\Http\Requests\UpdateViewsDownloads;

use App\Page;


class pagesController extends Controller
{

    public function show($alias)
    {
    	$page = Page::where('alias', $alias)->get();

	    return response()->json($page);
	    // return view('test', compact('page'));

    }

    public function update(UpdateViewsDownloads $request, $alias)
    {
        $page = Page::where('alias', $alias)->first(); //first() instead of get, in order to make update() work

        //validate if requests views/downloads are integers
        $page->views = is_int($request->views) ? $request->views : $page->views ;

        //if changes made to model since it was queried from databse save changes and return response
        if($page->isDirty('views')){
            $page->save();
            return response()->json(['update_success' => 'true', 'updated_views' => $request->views]);
        }
        if(!$page->isDirty()){
            return response()->json(['update_success' => 'false']);
        }

    }
}