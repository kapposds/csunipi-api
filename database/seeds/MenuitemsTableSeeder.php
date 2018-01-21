<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MenuitemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		DB::table("menuitems")->insert([
	    		'alias' => 'home',
	    		'title' => 'Home',
	    		'icon' => 'fa fa-home',
	    		'order' => '1'
    		]);

    	DB::table("menuitems")->insert([
	    		'alias' => 'contact',
	    		'title' => 'Contact',
	    		'icon' => 'fa fa-phone',
	    		'order' => '2'    			    		
    		]);
    	DB::table("menuitems")->insert([
	    		'alias' => 'fullwebsite',
	    		'title' => 'Website',
	    		'icon' => 'ion-ios-world',
	    		'external_url' => 'http://www.csunipi.gr',
	    		'order' => '3'	    		
    		]);    	
    }
}
