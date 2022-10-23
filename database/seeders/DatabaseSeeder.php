<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name'=>'student']);
        Role::create(['name'=>'teacher']);
        Role::create(['name'=>'admin']);

        User::create([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=> bcrypt('password'),
            'role_id' => 3
        ]);
    }
}
