<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {

		$raw = [
			[
				'user_id' => 3,
				'zip'     => '4400',
				'city'    => 'Nyíregyháza',
				'address' => 'Rozmaring utca 26.',
				'business_type' => 'Kisbolt',
				'open_times' => 'Hétfő: 08-17',
			],
			[
				'user_id' => 3,
				'zip'     => '3910',
				'city'    => 'Budapest',
				'address' => 'Jókai utca 18.',
				'business_type' => 'Nagybolt',
				'open_times' => 'Hétfő: 10-16',
			],
		];

		foreach ($raw as $element) {
			DB::table('addresses')->insert($element);
		}

	}
}
