<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = user::create([
            'id' => 1,         
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('1234')
        ]);
    }
}
