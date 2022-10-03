<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\jnsbrta;
class jnsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jnsbrta = jnsbrta::create([
            'id_jns' => 1,         
            'nama' => 'top news',
        ]);
        $jnsbrta = jnsbrta::create([
            'id_jns' => 2,         
            'nama' => 'short news',
        ]);
        $jnsbrta = jnsbrta::create([
            'id_jns' => 3,         
            'nama' => 'common news',
        ]);
      
    }
}
