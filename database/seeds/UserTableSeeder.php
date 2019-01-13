<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $role_programmer = Role::where('name', 'programmer')->first();
        $role_downloader = Role::where('name', 'downloader')->first();

        $admin = new User();
        $admin->name = 'Administrator';
        $admin->email = 'admin@admin.lan';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($role_admin);
        $admin->roles()->attach($role_programmer);
        $admin->roles()->attach($role_downloader);

    }
}
