<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submenuitem extends Model
{
	public function menuitem()
	{

     return $this->belongsTo('App\Menuitem', 'category', 'alias');//relationship menuitem(1 <--- N)submenuitems
     										//category: submenuitems column, alias: menuitems column. category is foreign key to alias
     										//if we hadnt define these, the relationship is with the id by default
	}
}
