<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$user = new User();
		$user->name = 'John Doe';
		$user->username = 'admin';
		$user->email = 'admin@mail.com';
		$user->email_verified_at = now();
		$user->password = bcrypt('password');
		$user->save();
	}
}
