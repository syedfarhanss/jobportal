<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsermastersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usermasters', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('user_firstname');
			$table->string('user_lastname');
			$table->date('dob');
			$table->mediuminteger('age');
			$table->string('user_code');
			$table->string('place_of_birth');
			$table->string('nationality');
			//$table->string('user_lastname');
			$table->string('gender');
			$table->string('marriage_status');
			$table->string('spouse_name');
			$table->integer('no_of_children');
			$table->string('modified_by');
			$table->string('version');
			$table->boolean('status');
			$table->string('photo');
			$table->integer('total_experience');
			$table->integer('referral_id');
			//$table->foreign('user_id')->references('id')->on('users');
			//$table->foreign('organization_id')->reference('id')->on('organization');
                  
                 
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
		Schema::drop('usermasters');
	}

}
