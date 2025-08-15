<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('products', function (Blueprint $table) {
			$table->id();

			$table->unsignedBigInteger('price_lists_id')->nullable()->unsigned();
			$table->foreign('price_lists_id')->references('id')->on('pricelists');

			$table->unsignedBigInteger('category_id')->nullable()->unsigned();
			$table->foreign('category_id')->references('id')->on('categories');

			$table->unsignedBigInteger('manufacturer_id')->nullable()->unsigned();
			$table->foreign('manufacturer_id')->references('id')->on('manufacturers');

			$table->mediumText('name')->nullable()->default('');
			$table->string('model')->nullable()->default('');
			$table->string('price')->nullable()->default('');
			$table->string('image')->nullable()->default('');

			$table->string('attribute_1')->nullable()->default('');
			$table->string('attribute_2')->nullable()->default('');
			$table->string('attribute_3')->nullable()->default('');
			$table->string('attribute_4')->nullable()->default('');
			$table->string('attribute_5')->nullable()->default('');
			$table->string('attribute_6')->nullable()->default('');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('products');
	}
}
