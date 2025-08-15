<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UsersSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('users')->delete();
		$json = File::get('database/data/users.json');
		$data = json_decode($json, true);

		foreach ($data as $obj) {
			$obj['password'] = bcrypt($obj['password']);

			User::create($obj);
		}
	}
}
