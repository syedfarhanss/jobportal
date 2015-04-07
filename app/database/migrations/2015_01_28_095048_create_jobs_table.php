<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jobs', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('jobtitle');
			$table->string('jobdescription');
			$table->string('joblocation');
                        $table->string('salary');
                        $table->integer('user_id')->unsigned();
                        $table->foreign('user_id')->references('id')->on('users');
			$table->timestamps();
                        $table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('jobs');
	}

}
