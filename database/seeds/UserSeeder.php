<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->first_name = "admin";
        $admin->last_name = "admin";
        $admin->email = "admin@admin.com";
        $admin->password = Hash::make('123456789');
        $admin->save();
        $admin->assignRole('admin');

        $user = new User();
        $user->first_name = "user";
        $user->last_name = "user";
        $user->email = "user@user.com";
        $user->password = Hash::make('123456789');
        $user->save();
        $admin->assignRole('user');
    }
}
