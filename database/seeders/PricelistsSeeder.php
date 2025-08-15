<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PricelistsSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {

		$raw = [
			[
				'name' => 'Árlista 1',
			],
			[
				'name' => 'Árlista 2',
			],
			[
				'name' => 'Árlista 3',
			],
			[
				'name' => 'Árlista 4',
			],
		];

		foreach ($raw as $element) {
			DB::table('price_lists')->insert($element);
		}

	}
}
