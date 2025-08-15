<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('users', function (Blueprint $table) {
			$table->id();

			$table->unsignedBigInteger('price_lists_id')->nullable()->default(0)->unsigned();
			$table->foreign('price_lists_id')->references('id')->on('price_lists');

			$table->string('name');
			$table->string('email')->unique();
			$table->timestamp('email_verified_at')->nullable();
			$table->string('password');

			$table->tinyInteger('type')->default(0);
			$table->tinyInteger('state')->default(0);

			$table->string('company')->default('');
			$table->string('taxno')->default('');
			$table->string('lastname')->default('');
			$table->string('firstname')->default('');
			$table->string('phone')->default('');

			$table->rememberToken();
			$table->timestamps();

			$table->tinyInteger('notify_registration')->default(1);
			$table->tinyInteger('notify_order')->default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('users');
	}
}
