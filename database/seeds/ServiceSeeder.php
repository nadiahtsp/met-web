<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'nama' => 'Software Development',
            'deskripsi' => 'Develop native web and mobile applications',
        ]);
    }
}
