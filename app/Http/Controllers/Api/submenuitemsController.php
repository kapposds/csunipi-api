<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;  


use Illuminate\Http\Request;

use App\Http\Requests;

use App\Menuitem;

use App\Submenuitem;

class submenuitemsController extends Controller
{
    public function show_category($category)
    {
	    $submenuitems = Submenuitem::with('menuitem')->where('category', $category)->get();

	    return response()->json($submenuitems);
    }
}
