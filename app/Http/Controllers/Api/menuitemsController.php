<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;  

use App\Menuitem;

use Illuminate\Http\Request;

use App\Http\Requests;

class MenuitemsController extends Controller
{
	public function index()
	{
    $menuitems = Menuitem::all();

    return response()->json($menuitems);
	}
}
