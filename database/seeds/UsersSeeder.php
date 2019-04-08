<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat role admin
		$adminRole = new Role();
		$adminRole->name = "admin";
		$adminRole->display_name = "Admin";
		$adminRole->save();
		// Membuat role hrd
		$hrdRole = new Role();
		$hrdRole->name = "hrd";
		$hrdRole->display_name = "HRD";
		$hrdRole->save();
		// Membuat sample admin
		$admin = new User();
		$admin->name = 'Admin';
		$admin->email = 'admin@gmail.com';
		$admin->password = bcrypt('rahasia');
		$admin->save();
		$admin->attachRole($adminRole);
		// Membuat sample hrd
		$hrd = new User();
		$hrd->name = "HRD";
		$hrd->email = 'hrd@gmail.com';
		$hrd->password = bcrypt('rahasia');
		$hrd->save();
		$hrd->attachRole($hrdRole);
    }
}
