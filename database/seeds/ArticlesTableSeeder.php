<?php

use Illuminate\Database\Seeder;

use App\Page;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		$pagesCategories = Page::all()->pluck('category')->toArray();
		dd($pagesCategories);

    	for ($i=0; $i<=20; $i++){
	        DB::table('articles')->insert([
	        	'alias' => 'dummy-article-'.$i,
	        	'category' => randomElement($pagesAliases),
	        	'viewtitle' => 'distinctions',
	        	'title' => 'title',
	        	'content' => 'content',
	        	'thumbnail' => null,
	        	'downloads' => 0,
	        	'attachement' => 0,
	        	'views' => 0
	        ]);    		
    	}

    }
}
			// $table->increments('id');
			// $table->string('alias');
			// $table->string('category')->index('articles_category_foreignkey_pages_alias');
			// $table->string('viewtitle');
			// $table->text('title', 65535);
			// $table->text('content', 65535);
			// $table->string('thumbnail')->nullable();
			// $table->integer('downloads')->unsigned()->default(0);
			// $table->enum('attachement', array('0','1'))->default('0');
			// $table->integer('views')->unsigned()->default(0);
			// $table->timestamps();
			// $table->unique(['alias','category'], 'unique_index');