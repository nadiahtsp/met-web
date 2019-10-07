<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'nama' => 'Pemkot Kota Depok',
            'gambar' => 'logodepok.jpg',
        ]);
    }
}
