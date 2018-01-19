<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSubmenuitemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('submenuitems', function(Blueprint $table)
		{
			$table->foreign('category', 'submenuitems_category_foreign_menuitems_alias')->references('alias')->on('menuitems')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('submenuitems', function(Blueprint $table)
		{
			$table->dropForeign('submenuitems_category_foreign_menuitems_alias');
		});
	}

}
