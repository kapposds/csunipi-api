<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['views' , 'title' , 'alias' , 'content'];

    public function articles()
    {

        return $this->hasMany('App\Article', 'category', 'alias'); //relationship articles(N --- 1)pages

    }

    public function people()
    {

        return $this->hasMany('App\Person', 'category', 'alias'); //relationship articles(N --- 1)people

    }

    public function menuitem()
    {
        return $this->belongsTo('App\Menuitem', 'category', 'alias');//relationship menuitem(1 <--- N)pages
    }
}
