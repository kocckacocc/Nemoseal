<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {

		// php artisan migrate:refresh --path=/database/migrations/2020_12_28_095140_create_pages_table.php

		Schema::create('pages', function (Blueprint $table) {
			$table->id();

			$table->string('lang', 10)->default('');
			$table->string('slug', 50)->default('');
			$table->string('title', 100)->default('');
			$table->string('menu_item', 100)->default('');
			$table->mediumText('content');
			$table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('pages');
	}
}
