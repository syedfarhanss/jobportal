<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserContactTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_contact', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->increments('user_contact_id');
			$table->string('address');
			$table->string('city');
			$table->string('state');
			//$table->string('user_lastname');
			$table->string('country');
			$table->integer('pincode');
			$table->integer('mobile');
			$table->string('email');
			$table->string('modified_by');
			//$table->string('version');
			$table->boolean('status');
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
		Schema::drop('user_contact');
	}

}
