<?php

use Illuminate\Database\Seeder;

class PilarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pilars')->insert([
            'logo' => 'pillar.png',
            'nama' => 'S',
            'deskripsi' => 'The spirit of trust',
        ]);
    }
}
