<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersDefaultRoleBlogger extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		DB::statement('ALTER TABLE `users` MODIFY COLUMN `role` ENUM("admin", "blogger") DEFAULT "blogger"');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		DB::statement('ALTER TABLE `users` MODIFY COLUMN `role` ENUM("admin", "blogger")');
	}

}
