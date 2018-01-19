<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menuitem extends Model
{
    public function submenuitems()
    {

        return $this->hasMany('App\Submenuitem', 'category', 'alias'); //relationship submenuitems(N --- 1)menuitem

    }
}
