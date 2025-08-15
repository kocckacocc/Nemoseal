<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('addresses', function (Blueprint $table) {
			$table->id();

			$table->unsignedBigInteger('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');

			$table->string('zip')->nullable()->default('');
			$table->string('city')->nullable()->default('');
			$table->string('address')->nullable()->default('');
			$table->string('business_type')->nullable()->default('');
			$table->string('open_times')->nullable()->default('');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('addresses');
	}
}
