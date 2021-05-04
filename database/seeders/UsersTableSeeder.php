<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('nama','admin')->first();
        $writerRole = Role::where('nama','writer')->first();

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123')
        ]);

        $writer = User::create([
            'name' => 'writer',
            'email' => 'writer@writer.com',
            'password' => Hash::make('writer123')
        ]);

        $admin->roles()->attach($adminRole);
        $writer->roles()->attach($writerRole);
    }
}
