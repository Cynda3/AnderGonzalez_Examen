<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) { 
        	DB::table('hotels')->insert([
                'nombre' => str_random(10),
                'direccion' => 'C/'.str_random(5),
                'categoria' => random_int(1, 5),
                'completo' => true,
                'antiguedad' => '2018/12/25',
			]);
        }
    }
}
