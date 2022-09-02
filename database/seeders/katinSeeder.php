<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\katinflu;
class katinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $katinflu = katinflu::create([
            'id' => 1,         
            'nama' => 'instagram',
        ]);
        $katinflu = katinflu::create([
            'id' => 2,         
            'nama' => 'twiter',
        ]);
        $katinflu = katinflu::create([
            'id' => 3,         
            'nama' => 'tik tok',
        ]);
        $katinflu = katinflu::create([
            'id' => 4,         
            'nama' => 'youtube',
        ]);
        $katinflu = katinflu::create([
            'id' => 5,         
            'nama' => 'facebook',
        ]);
    }
}
