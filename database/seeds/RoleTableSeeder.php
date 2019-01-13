<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'Administrator';
        $role_admin->save();

        $role_user = new Role();
        $role_user->name = 'programmer';
        $role_user->description = 'Record Programmer';
        $role_user->save();

        $role_user = new Role();
        $role_user->name = 'downloader';
        $role_user->description = 'Download User';
        $role_user->save();

    }
}
