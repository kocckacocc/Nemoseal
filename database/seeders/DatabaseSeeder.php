<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {

		$this->call(UsersSeeder::class);
		$this->call(AddressSeeder::class);

		$this->call(CategorySeeder::class);
		$this->call(ManufacturerSeeder::class);
		$this->call(PricelistsSeeder::class);
		$this->call(ProductsSeeder::class);

	}
}
