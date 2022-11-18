<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produk extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk')->insert(array(['nama' => 'Meja','harga' =>
        '50000',],['nama' => 'Kursi', 'harga' => '40000',] ));
    }
}
