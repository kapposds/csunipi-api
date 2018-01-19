<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('alias');
			$table->string('category')->index('articles_category_foreignkey_pages_alias');
			$table->string('viewtitle');
			$table->text('title', 65535);
			$table->text('content', 65535);
			$table->string('thumbnail')->nullable();
			$table->integer('downloads')->unsigned()->default(0);
			$table->enum('attachement', array('0','1'))->default('0');
			$table->integer('views')->unsigned()->default(0);
			$table->timestamps();
			$table->unique(['alias','category'], 'unique_index');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('articles');
	}

}
