<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
                'kode_satuan' => 'M',
                'nama_satuan' => 'Meter'
            ],
            [
                'kode_satuan' => 'KG',
                'nama_satuan' => 'Kilogram'
            ],
        ]);
    }
}
