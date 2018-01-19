<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'views','downloads',
        'title', 'alias', 'category', 'viewtitle',
        'thumbnail','attachement','content',
    ];

	public function page()
	{

     return $this->belongsTo('App\Page', 'category', 'alias');//relationship page(1 <--- N)articles
     										//category: articles column, alias: page column. category is foreign key to alias
     										//if we hadnt define these, the relationship is with the id by default
	}    
}
