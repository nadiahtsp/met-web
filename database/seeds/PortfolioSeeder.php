<?php

use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            'nama' => 'SIPP-KLING',
            'link' => 'www.sipkling.com',
            'gambar' => 'portfolio_item_06.jpg',
        ]);
    }
}
