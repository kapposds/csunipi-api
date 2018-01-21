<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePeopleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('people', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('alias');
			$table->string('category')->index('people_category_foreignkey_pages_alias');
			$table->enum('rank', array('president','professors','associate-professors','assistant-professors','lecturers','professors-emeriti','secretariat'));
			$table->string('fullname');
			$table->string('tags');
			$table->string('avatar')->default('default.jpg');
			$table->string('location')->nullable();
			$table->string('office_hours')->nullable();
			$table->string('phone_number')->nullable();
			$table->string('email')->nullable();
			$table->string('website')->nullable();
			$table->enum('divider', array('1','0'))->default('0');
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('people');
	}

}
