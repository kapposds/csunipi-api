<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubmenuitemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('submenuitems', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('alias')->unique('alias');
			$table->integer('order')->unsigned();
			$table->string('category')->index('submenuitems_category_foreign_menuitems_alias');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('submenuitems');
	}

}
