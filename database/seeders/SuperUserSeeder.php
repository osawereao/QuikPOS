<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class SuperUserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$user = User::create([
			'name' => 'Guardian',
			'email' => 'guardian@quikpos.co',
			'password' => Hash::make('SuperAO24#'),
			'is_active' => 1
		]);

		$superAdmin = Role::create([
			'name' => 'Super Admin'
		]);

		$user->assignRole($superAdmin);
	}
}
