<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {

		$raw = [
			[
				'category_id' => 1,
				'manufacturer_id' => 1,
				'price_lists_id' => 1,
				'name'     => 'Minta termék 1',
				'model'    => '123456',
				'price' => '1000',
			],
			[
				'category_id' => 2,
				'manufacturer_id' => 2,
				'price_lists_id' => 1,
				'name'     => 'Minta termék 2',
				'model'    => '123457',
				'price' => '1500',
			],

			[
				'category_id' => 1,
				'manufacturer_id' => 1,
				'price_lists_id' => 2,
				'name'     => 'Minta termék 1',
				'model'    => '123456',
				'price' => '800',
			],
			[
				'category_id' => 2,
				'manufacturer_id' => 2,
				'price_lists_id' => 2,
				'name'     => 'Minta termék 2',
				'model'    => '123457',
				'price' => '1200',
			],
		];

		foreach ($raw as $element) {
			DB::table('products')->insert($element);
		}

	}
}
